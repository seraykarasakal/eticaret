@extends('frontend.layouts.layout')
@section('content')

  <div class="site-wrap">
    <div class="site-section">
    <x-layouts.container>
        <div class="row">
          <div class="w-full px-[15px]">
            <h2 class="font-medium leading-[1.2rem] mb-4 text-[26px] text-black">İletişim</h2>
          </div>

          <div class="flex flex-wrap">
          <div class="px-[15px] min-h-[1px] relative w-[70%] h-full">
              @if(session()->has('message'))
              <div class="alert alert-success" >
                  {{session()->get('message')}}
              </div>
              @endif

              @if(count($errors))
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" >{{$error}}
                </div>
                @endforeach
              @endif
              <form action="{{route('contact_save')}}" method="post">
                @csrf
                <div class="p-[16px] border-[1px] border-solid border-[#dee2c5] ">

                  <div class="mb-[16px] flex justify-center items-center px-[5px] gap-[15px]">
                    <div class="max-md:w-1/2 ">
                      <label for="c_fname" class="text-black inline-block mb-[8px]">Ad<span class="text-danger">*</span></label>
                      <input type="text" class="block w-full py-1.5 px-3 text-[16px] leading-[1.5] text-[#495057] bg-white rounded-[4px] border-[1px] border-solid border-[#ced4da] bg-clip-padding  " id="c_fname" name="name">
                    </div>
                    <div class="max-md:w-1/2">
                      <label for="c_fname" class="text-black inline-block mb-[8px]">SoyAd<span class="text-danger">*</span></label>
                      <input type="text" class="block w-full py-1.5 px-3 text-[16px] leading-[1.5] text-[#495057] bg-white rounded-[4px] border-[1px] border-solid border-[#ced4da] bg-clip-padding  " id="c_fname" name="name">
                    </div>
                  </div>
                  <div class="mb-[16px] flex justify-center items-center px-[5px] gap-[15px]">
                    <div class="max-md:w-1/2">
                      <label for="c_email" class="text-black inline-block mb-[8px]">E-mail<span class="text-danger">*</span></label>
                      <input type="email" class="block w-full py-1.5 px-3 text-[16px] leading-[1.5] text-[#495057] bg-white rounded-[4px] border-[1px] border-solid border-[#ced4da] bg-clip-padding  " id="c_email" name="name">
                    </div>
                    <div class="max-md:w-1/2">
                      <label for="c_phone" class="text-black inline-block mb-[8px]">E-mail<span class="text-danger">*</span></label>
                      <input type="email" class="block w-full py-1.5 px-3 text-[16px] leading-[1.5] text-[#495057] bg-white rounded-[4px] border-[1px] border-solid border-[#ced4da] bg-clip-padding  " id="c_email" name="name">
                    </div>
                  </div>
                
                  <div class="mb-[16px] flex justify-center items-center px-[5px]">
                    <div class="w-full" >
                      <label for="c_subject" class="text-black">Konu</label>
                      <input type="text" class="block w-full py-1.5 px-3 text-[16px] leading-[1.5] text-[#495057] bg-white rounded-[4px] border-[1px] border-solid border-[#ced4da] bg-clip-padding " id="c_subject" name="subject">
                    </div>
                  </div>

                  <div class="mb-[16px] flex justify-center items-center px-[5px]">
                    <div class="w-full">
                      <label for="c_message" class="text-black">Mesaj</label>
                      <textarea name="message" id="c_message" cols="30" rows="7" class="block w-full py-1.5 px-3 text-[16px] leading-[1.5]   text-[#495057] bg-white rounded-[4px] border-[1px] border-solid border-[#ced4da] bg-clip-padding "></textarea>
                    </div>
                  </div>
                  <div class="mb-[16px] flex justify-end items-end px-[5px]">
                    <div class=" w-1/2">
                      <button type="submit" class="uppercase relative transition-all text-[17px] font-light	tracking-[.2em] bg-black btn-lg block w-full rounded-[4px]" value="Send Message">Gönder</button>
                    </div>
                  </div>
                </div>
              </form>
          </div>
          <div class="w-[30%] flex flex-col justify-around items-stretch ">
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">New York</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>

            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">New York</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
            <div class="p-4 border mb-3">
              <span class="d-block text-primary h6 text-uppercase">New York</span>
              <p class="mb-0">203 Fake St. Mountain View, San Francisco, California, USA</p>
            </div>
          </div>
          </div>
        </div>
    </x-layouts.container>
    </div>
  </div>


@endsection