<div class="flex justify-center mt-10">
        <div class="card bg-base-100 w-96 shadow-sm">
            <figure class="px-10 pt-10">
                <img src="{{ $src }}" alt="{{ $alt }}"
                    class="rounded-xl" />
            </figure>
            <div class="card-body items-center text-center">
                <h2 class="card-title">{{ $title }}</h2>
                <p>{{ $description }}</p>
                <div class="card-actions">
                    <button class="btn btn-primary">{{ $buttonText }}</button>
                </div>
            </div>
        </div>
    </div>