<div class="item h-full">
    <div class="shadow-[0_0_30px_-10px_rgba(0,0,0,0.1)] bg-white text-center  flex flex-col items-stretch h-full">
      <figure class="block mx-0 mt-0 pb-4  h-8/12">
        <img src="{{ asset($image) }}" alt="Image placeholder" class="max:w-full align-middle ">
      </figure>
      <div class="text-center flex flex-col justify-center items-center h-4/12 p-[26px]">
        <h3 class="text-[20px] mb-[2px] font-medium leading-[1.2]"><a class="no-underline text-purple" href="#"> {{ $title }} </a></h3>
        <p class="mb-[2px] decora text-grey-1 "> {{ $content }} </p>
        <p class="text-purple font-bold	">{{ $price }} TL</p>
      </div>
    </div>
</div>
