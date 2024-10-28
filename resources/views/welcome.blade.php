<x-default-view>
    <header class="flex flex-col gap-1 p-4">
        <h1 class="font-semibold text-3xl text-white">Hotel PHP + Laravel</h1>
        <p class="text-md text-neutral-300">Hecho por Sidney Silva Braz de Oliveira.</p>
    </header>
    <main class="flex flex-col gap-6 p-4">
        <div class="bg-yellow-300 p-3 border border-yellow-400 rounded">
            <h2 class="text-md text-black font-semibold">Nota importante</h2>
            <div class="flex flex-col gap-1 text-neutral-800 text-sm leading-relaxed">
                <p>Este proyecto aún está en desarrollo y puede tener fallos. Para más información sobre este proyecto,
                    visita mi <a class="text-blue-600 underline underline-offset-2"
                        href="https://github.com/sxdny">página
                        de Github.</a></p>
            </div>
        </div>x

        <div class="flex flex-col gap-1 bg-neutral-900 p-4 border border-neutral-700 rounded">
            <h2 class="text-xl font-semibold text-white">Descripción del Proyecto</h2>
            <div class="text-sm flex flex-col gap-3 text-neutral-300 leading-relaxed">
                <p>Mi objetivo con este proyecto es hacer un sistema de gestión para un Hotel, actividad
                    que tenia asignada cuando cursaba el GS de Desarrollo de Aplicaciones Web, en la asignatura
                    de Desarrollo Web entorno Servidor. Quiero retomar esta actividad y acabarla ya de una vez
                    siguiento las pautas dadas por el profesor en ese momento.
                </p>
                <p>
                    Realizaré el Proyecto con PHP Laravel y para la base de datos, usaré MariaDB. Más adelante iré
                    añadiendo herramientas y tal.
                </p>
                <p>Asi que eso, a hacer la maldita actividad de una vez por todas.</p>
            </div>
        </div>

        <div class="flex gap-3 items-center">
            <a href="/home" class="max-w-48 bg-lime-300 px-6 py-2 border rounded border-lime-800 text-lime-950 font-semibold">Comenzar</a>
            <p class="text-sm text-neutral-100">Pulsa este botón para ir al proyecto.</p>
        </div>
    </main>
</x-default-view>
