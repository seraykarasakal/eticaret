@extends('frontend.layouts.layout')
@section('content')

    <div class=" py-10 ">
      <x-layouts.container>
          <div class="flex max-md:flex-wrap ">
            <div class="md:w-[50%] max-md:w-full md:flex md:justify-center md:items-center p-[30px]  ">
              <img src="images/blog_1.jpg" alt="Image placeholder" class="img-fluid rounded">
              <a href="https://vimeo.com/channels/staffpicks/93951774" class="play-button popup-vimeo"><span class="ion-md-play"></span></a>
            </div>
            <div class="md:w-[50%] max-md:w-full max-md:flex-col md:flex md:flex-col p-[20px]  ">
              <h2 class="text-[30px] font-normal font-poppins max-md:text-[26px]  text-black mb-[15px] " >Biz Kimiz?</h2>
              <p class="text-[18px] max-md:text-[16px] font-normal font-poppins text-[#544e4e] leading-[1.7em]" >Müşterilerimize benzersiz bir alışveriş deneyimi sunmayı amaçlayan bir e-ticaret platformuyuz. ShopVibe'ın temeli, kaliteli ürünleri uygun fiyatlarla sunma, müşteri memnuniyetini en üst düzeye çıkarma ve sürdürülebilir bir alışveriş ortamı yaratma misyonuna dayanmaktadır.Her birimiz, kendi alanlarında uzman, yaratıcı ve çözüm odaklı bireyleriz. </p>
            <p class="text-[18px] max-md:text-[16px] font-normal font-poppins text-[#544e4e] leading-[1.7em]" >Müşterilerimizle bağlantı kurma ve onlara unutulmaz bir alışveriş deneyimi sunma konusundaki kararlılığımız, bizi diğerlerinden ayıran temel unsurlardan biridir.</p>
            </div>
          </div>
      </x-layouts.container>
    </div>

    <div class="py-10 ">
      <x-layouts.container>
          <div class="text-center text-black  py-8 md:text-[30px]">
            <h2 >Takım Arkadaşlarımız</h2>
          </div>
          <div class="flex max-lg:flex-wrap gap-2 pt-[10px] ">
            <div class="flex flex-col max-md:p-[30px] text-center gap-2 p-3">
              <div class="flex justify-center items-center text-center p-[5px]  " >      
                <img src="images/women-face.jpeg" alt="Image placeholder" class=" rounded-[75%]  w-[100px]" >
              </div>
              <div>
                <h3 class="text-black font-[300] ">Aslı Çelik</h3>
                <p class=" text-[#504f4f] capitalize text-[16px] tracking-[.1em]"> Grafik Tasarımcı</p>
              </div>
              <div>
                <p class="text-[18px] max-md:text-[16px] font-normal font-poppins text-[#544e4e] leading-[1.7em] pt-2">Yaratıcılığı ve estetik anlayışıyla, grafik tasarım alanında müşterilere özgün ve etkileyici çözümler sunan bir uzmandır.</p>
              </div>
            </div>
            <div class="flex flex-col max-md:p-[30px] text-center gap-2 p-3">
              <div class="flex justify-center items-center text-center p-[5px]  " >      
                <img src="images/man-face2.jpeg" alt="Image placeholder" class=" rounded-[75%]  w-[100px]" >
              </div>
              <div>
                <h3 class="text-black font-[300] ">Mert Yılmaz</h3>
                <p class=" text-[#504f4f] capitalize text-[16px] tracking-[.1em]">Yazılım Geliştirici</p>
              </div>
              <div>
                <p class="text-[18px] max-md:text-[16px] font-normal font-poppins text-[#544e4e] leading-[1.7em] pt-2">Kodlama alanındaki bilgi ve becerisiyle, yazılım geliştirme projelerinde liderlik eden bir yazılım uzmanıdır.</p>
              </div>
            </div>
            <div class="flex flex-col max-md:p-[30px] text-center gap-2 p-3">
              <div class="flex justify-center items-center text-center p-[5px]  " >      
                <img src="images/women-face2.jpeg" alt="Image placeholder" class=" rounded-[75%]  w-[100px]" >
              </div>
              <div>
                <h3 class="text-black font-[300] ">Ayşe Kaya</h3>
                <p class=" text-[#504f4f] capitalize text-[16px] tracking-[.1em]"> İnsan Kaynakları Uzmanı</p>
              </div>
              <div>
                <p class="text-[18px] max-md:text-[16px] font-normal font-poppins text-[#544e4e] leading-[1.7em] pt-2">İnsan ilişkileri ve işe alma konusundaki deneyimiyle, şirketin insan kaynakları süreçlerini yöneten bir profesyoneldir.</p>
              </div>
            </div>
            <div class="flex flex-col max-md:p-[30px] text-center gap-2 p-3">
              <div class="flex justify-center items-center text-center p-[5px]  " >      
                <img src="images/man-face3.jpeg" alt="Image placeholder" class=" rounded-[75%]  w-[100px]" >
              </div>
              <div>
                <h3 class="text-black font-[300] ">Emre Atalay</h3>
                <p class=" text-[#504f4f] capitalize text-[16px] tracking-[.1em]"> Dijital Pazarlama Uzmanı</p>
              </div>
              <div>
                <p class="text-[18px] max-md:text-[16px] font-normal font-poppins text-[#544e4e] leading-[1.7em] pt-2">Dijital pazarlama stratejilerindeki uzmanlığı ve analitik becerileriyle, markaların çevrimiçi varlıklarını güçlendiren bir dijital pazarlama uzmanıdır. </p>
              </div>
            </div>
          </div>
        
      </x-layouts.container>
    </div>
      
    <div class="py-[64px] text-left border-solid box-border border-b-[1px] ">
      <x-layouts.container>
        <div class="flex flex-wrap ">

          <div class="flex w-full md:w-1/3 px-[15px] my-[15px] animate-fadeIn "  >
            <div class="mr-4 self-start">
              <i class="las la-truck relative text-purple  text-[30px] inline-block"></i>
            </div>
            <div >
              <h2 class="uppercase text-grey text-[26px]  ">ÜCRETSİZ</h2>
              <p class="capitalize text-grey-4">Ücretsiz kargo hizmeti.</p>
            </div>
          </div>

          <div class="flex w-full md:w-1/3 px-[15px] my-[15px] animate-fadeIn" >
            <div class="mr-4 self-start delay-200">
              <i class="las la-redo-alt relative text-purple  text-[30px] inline-block"></i>
            </div>
            <div>
              <h2 class="uppercase text-grey text-[26px] ">GERİ İADE</h2>
              <p class="capitalize text-grey-4">15 gün İçerisinde ücretsiz İade hizmeti.</p>
            </div>
          </div>

          <div class="flex w-full md:w-1/3 px-[15px] my-[15px]  animate-fadeIn" >
            <div class="mr-4 self-start">
              <i class="lar la-question-circle relative text-purple text-[30px] inline-block"></i>      
            </div>
            <div >
              <h2 class="uppercase text-grey text-[26px] ">DESTEK</h2>
              <p class="capitalize text-grey-4">7/24 bize ulaşabilirsiniz.</p>
            </div>
          </div>

        </div>
      </x-layouts.container>
    </div>    
@endsection