{{-- Background animé --}}
<div class="fixed inset-0 pointer-events-none select-none z-0 overflow-hidden"
     x-data="{
            translateX: -5,
            translateY: 5,
            init() {
                setInterval(() => {
                    this.translateX = -15 + Math.random() * 30;
                    this.translateY = -35 + Math.random() * 70;
                }, 500);
            }
         }">
    <div class="absolute w-full h-full">
        <div class="absolute opacity-[0.025] -inset-[200%] w-[500%] h-[500%] transition-transform duration-500 ease-in-out"
             :style="`background-image: url('{{ asset('img/bg.png') }}'); will-change: transform; transform: translateX(${translateX}%) translateY(${translateY}%)`">
        </div>
    </div>
</div>
