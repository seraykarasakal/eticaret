<div class="item h-full">
    <div class="shadow-[0_0_30px_-10px_rgba(0,0,0,0.1)] bg-white text-center  flex flex-col items-stretch h-full">
      <figure class="block mx-0 mt-0 pb-4 h-full">
        <img src="{{ asset($image) }}" alt="Image placeholder" class="max:w-full h-auto align-middle ">
      </figure>
      <div class="text-center flex flex-col justify-center items-center h-full p-[26px]">
        <h3 class="text-[20px] mb-[2px] font-medium leading-[1.2]"><a class="no-underline text-purple" href="#"> {{ $title }} </a></h3>
        <p class="mb-[2px] decora text-grey-1 "> {{ $content }} </p>
        <p class="text-purple font-bold	">{{ $price }}</p>
      </div>
    </div>
</div>
