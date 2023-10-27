<div class="item">
    <div class="shadow-[0_0_30px_-10px_rgba(0,0,0,0.1)] bg-white text-center">
      <figure class="block mx-0 mt-0 mb-4">
        <img src="{{ asset($image) }}" alt="Image placeholder" class="max:w-full h-auto align-middle ">
      </figure>
      <div class="block-4-text p-4">
        <h3 class="text-[20px] mb-0 font-medium leading-[1.2]"><a class="no-underline text-purple" href="#"> {{ $title }} </a></h3>
        <p class="mb-0 decora text-grey-1"> {{ $content }} </p>
        <p class="text-purple font-bold	">{{ $price }}</p>
      </div>
    </div>
</div>
