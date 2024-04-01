<x-app-layout>
    <div class="h-full w-full" style="background-color: #F8F9FA">
        <div class="w-full h-1.2/10 px-6">
            <button id="testButton">Haz clic aquí</button>
            <script>
            $(document).ready(function() {
                $('#testButton').click(function() {
                    console.log('¡El botón ha sido clickeado!');
                });
            });
            </script>
        </div>
    </div>
</x-app-layout>