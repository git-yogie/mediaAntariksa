<!-- resources/views/components/drag-drop-ordering.blade.php -->
<div class="container my-5">
    <h2 class="text-center mb-4"></h2>
    <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Instruksi</h4>
        <p>{{ $instruction }}</p>
        <hr>
        <p class="mb-0">Poin didapat kan (100)</p>
    </div>
    <div class="row">
        <!-- Daftar Item untuk Diurutkan -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Item</h5>
                </div>
                <div class="card-body" id="sortable-list">
                    @foreach ($items as $item)
                        <div class="list-group-item d-flex align-items-center mb-2 p-2 bg-light border rounded"
                            draggable="true" data-name="{{ $item['name'] }}">
                            @if (isset($item['image']))
                                <img src="{{ asset('images/' . $item['image']) }}" alt="{{ $item['name'] }}"
                                    class="me-2" style="width: 50px;">
                            @endif
                            <span>{{ $item['name'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Urutan yang Diberikan -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-secondary text-white">
                    <h5 class="mb-0">Urutan Anda</h5>
                </div>
                <div class="card-body" id="user-order">
                    <!-- Item yang diurutkan akan ditempatkan di sini -->
                </div>
            </div>
        </div>
    </div>

    <!-- Tombol -->
    <div class="text-center mt-4">
        <button class="btn btn-success me-2 check-btn">Periksa</button>
        <button class="btn btn-danger reset-btn">Reset</button>
    </div>

    <!-- JavaScript untuk Drag and Drop dan Validasi -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const sortableList = document.getElementById('sortable-list');
            const userOrder = document.getElementById('user-order');
            const checkBtn = document.querySelector('.check-btn');
            const resetBtn = document.querySelector('.reset-btn');

            // Parsing urutan yang benar dari PHP ke JavaScript
            const correctOrder = @json($correctOrder);

            let userAnswers = [];
            const point = {{ $point }}
            const title = `{{ $title }}`
            const materi = `{{ $materi }}`

            // Event Listeners untuk Drag and Drop
            sortableList.addEventListener('dragstart', (e) => {
                if (e.target && e.target.matches('.list-group-item')) {
                    e.dataTransfer.setData('text/plain', e.target.getAttribute('data-name'));
                    e.target.classList.add('opacity-50');
                }
            });

            sortableList.addEventListener('dragend', (e) => {
                if (e.target && e.target.matches('.list-group-item')) {
                    e.target.classList.remove('opacity-50');
                }
            });

            userOrder.addEventListener('dragover', (e) => {
                e.preventDefault();
            });

            userOrder.addEventListener('drop', (e) => {
                e.preventDefault();
                const itemName = e.dataTransfer.getData('text/plain');
                const existingItem = userOrder.querySelector(`[data-name="${itemName}"]`);

                if (!existingItem) {
                    const item = sortableList.querySelector(`[data-name="${itemName}"]`);
                    if (item) {
                        sortableList.removeChild(item);
                        userOrder.appendChild(item);
                        userAnswers.push(itemName);
                    }
                }
            });

            userOrder.addEventListener('dragstart', (e) => {
                if (e.target && e.target.matches('.list-group-item')) {
                    e.dataTransfer.setData('text/plain', e.target.getAttribute('data-name'));
                    e.target.classList.add('opacity-50');
                }
            });

            userOrder.addEventListener('dragend', (e) => {
                if (e.target && e.target.matches('.list-group-item')) {
                    e.target.classList.remove('opacity-50');
                }
            });

            sortableList.addEventListener('dragover', (e) => {
                e.preventDefault();
            });

            sortableList.addEventListener('drop', (e) => {
                e.preventDefault();
                const itemName = e.dataTransfer.getData('text/plain');
                const existingItem = sortableList.querySelector(`[data-name="${itemName}"]`);

                if (!existingItem) {
                    const item = userOrder.querySelector(`[data-name="${itemName}"]`);
                    if (item) {
                        userOrder.removeChild(item);
                        sortableList.appendChild(item);
                        const index = userAnswers.indexOf(itemName);
                        if (index > -1) {
                            userAnswers.splice(index, 1);
                        }
                    }
                }
            });

            // Tombol Periksa Jawaban
            checkBtn.addEventListener('click', () => {
                const userOrderItems = Array.from(userOrder.children).map(item => item.getAttribute(
                    'data-name'));

                let score = 0;
                const totalItems = correctOrder.length;
                let isCorrect = true;
                for (let i = 0; i < correctOrder.length; i++) {
                    if (userOrderItems[i] == correctOrder[i]) {
                        score += 1;
                    } else {
                        isCorrect = false;
                    }
                }



                const point = Math.round((score / totalItems) * 100);
                console.log(userOrderItems, score, totalItems, isCorrect, point);
                setProgress(materi, title, point)

                if (isCorrect && userOrderItems.length === correctOrder.length) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Benar!',
                        text: 'Urutan Anda benar!, anda mendapatkan ' + point + " Poin"
                    });
                } else {
                    Swal.fire({
                        icon: 'error',
                        title: 'Salah!',
                        text: 'Urutan Anda salah. Silakan coba lagi! anda mendapatkan ' + point +
                            " Poin"
                    });
                }
            });

            // Tombol Reset
            resetBtn.addEventListener('click', () => {
                // Pindahkan semua item kembali ke sortableList
                const itemsToReset = Array.from(userOrder.children);
                itemsToReset.forEach(item => {
                    userOrder.removeChild(item);
                    sortableList.appendChild(item);
                });
                userAnswers = [];
            });
        });
    </script>
</div>
