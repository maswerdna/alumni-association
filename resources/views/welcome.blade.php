<x-guest-layout headertext="Unilorin Alumni Platform">
    <div class="min-h-screen w-full overflow-hidden absolute top-0 left-0" id="welcome-bg" style="background: #000; background-image: url( {{ asset('img/welcome/bg-1.jpg') }} );"></div>
    <div class="min-h-screen w-full overflow-auto absolute top-0 left-0 z-10">
        <div class="welcome-grid-layout h-screen">
            <div class="grid-left">
                <span></span>
            </div>
            <div class="grid-content">
                <div class="w-full">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 border fill-current bg-white p-2 rounded-md shadow-sm" />
                    </a>
                    <div class="container mt-8">
                        <div class="text-left pt-5 pb-5 text-white">
                            <h1 class="text-6xl mb-5 font-black sm:text-7xl md:text-8xl">Unilorin <span class="text-yellow-300">Alumni</span></h1>
                            <div class="font--sans text-2xl">
                                <p>This awesome platform has helped a lot of people to connect with their old school friends and many more.</p>
                                <br>
                                <p>Visit our blog to catch up with the latest events. Who knows, you might meet an old friend!</p>
                            </div>
                            <div class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-block mt-8">
                                <a href="/login" class="w-full h-full">Show Blog</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grid-right">
                <div class="w-full border sm:max-w-md px-6 py-6 bg-white overflow-hidden sm:rounded-lg">
                    @include('auth.reg-form', ['heading' => 'Join Our Prestigous Platform'])
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>