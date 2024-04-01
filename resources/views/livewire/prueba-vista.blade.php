<div>
    {{-- clase 1 
    <div x-data="{ open: false }">
        <button @click="open = !open" type="button">Menu</button>
        <nav x-show="open" x-on:click.away="open = false">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
            <li>Item 4</li>
            <li>Item 5</li>
            <li>Item 6</li>
        </nav>
    </div>
    --}}

    {{-- clase 2
    <div x-data="datos()" x-init="montarVariables()">
        <button @click="mostrarOcultarLista()" type="button">Menu</button>
        <nav x-show="open" x-on:click.away="ocultarLista()">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
            <li>Item 4</li>
            <li>Item 5</li>
            <li>Item 6</li>
        </nav>
    </div>
    <script>
        function datos() {
            return {
                open: null,
                montarVariables() {
                    this.open = false;
                },
                mostrarOcultarLista() {
                    this.open = !this.open;
                },
                ocultarLista() {
                    this.open = false;
                }
            }
        }
    </script>
    --}}
    
    {{-- clase 3
    <div x-data="datos()" x-init="montarVariables()">
        <button class="bg-green-500 disabled:bg-green-200" x-bind:disabled="open" x-on:click="mostrarOcultarLista()" type="button">Menu</button>
        <nav class="hidden" x-bind:class="{ 'hidden': !open }" x-show="open" x-on:click.away="ocultarLista()">
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
            <li>Item 4</li>
            <li>Item 5</li>
            <li>Item 6</li>
        </nav>
    </div>
    <script>
        function datos() {
            return {
                open: null,
                montarVariables() {
                    this.open = false;
                },
                mostrarOcultarLista() {
                    this.open = !this.open;
                },
                ocultarLista() {
                    this.open = false;
                }
            }
        }
    </script>
    --}}
    
    {{-- Clase #4
    <p> Ejercicio 1 (enlazar un input a una variable)</p>
    <div x-data="{ mensaje: null }">
        <input type="text" x-model="mensaje">
        <p x-text="mensaje"></p>
    </div>

    <p> Ejercicio 2 (cambiar valor al hacer click)</p>
    <div x-data="{ mensaje: null }">
        <input type="text" x-model="mensaje">

        <button x-on:click="$refs.lugarParaMostrar.innerText=mensaje" >Enviar</button>

        <p x-ref="lugarParaMostrar"></p>
    </div>
    --}}

    {{--  clases #5
    <div x-data="datos()">
        <ul>
            <template x-for="productoActual in Object.values(productos)">
                <li>
                    <span x-text="productoActual.cantidad"></span> -
                    <span x-text="productoActual.nombre"></span>
                    <template x-if="productoActual.cantidad == 0">
                        <span>(sin stock)</span>
                    </template>
                </li>
            </template>
        </ul>
    </div>
    <script>
        function datos() {
            return {
                productos: {
                    1: {
                        id: 1,
                        nombre: "mouse",
                        cantidad: 2
                    },
                    2: {
                        id: 2,
                        nombre: "teclado",
                        cantidad: 0
                    },
                    3: {
                        id: 3,
                        nombre: "pantalla",
                        cantidad: 69
                    }
                }
            }
        }
    </script>
    --}}

    {{--  video #6
    <p>Ejercicio 1, submit de formulario</p>
    <div x-data="{ mensaje: null}">
        <form action="" x-on:submit.prevent="console.log(mensaje)">
            <input type="text" x-model="mensaje">
            <button x-on:click.away="console.log('has hecho click fuera del boton')">
                Enviar
            </button>
        </form>

    </div>
    
    <p>Ejercicio 2, key down enter</p>
    <div x-data="{ mensaje: null }">
        <input type="text" x-model="mensaje" x-on:keydown.enter="console.log(mensaje)">
    </div>

    <p>Ejercicio 3, resize de pantalla a grande (solo funciona cuando es mayor a 768)</p>
    <div x-data="{ open: true }" @resize.window="open = window.outerWidth > 768 ? true : false">
        <div x-show="open">
            <iframe width="110" height="200" src="https://www.myinstants.com/instant/mashle-magic-and-muscle-season-2-openning-47272/embed/" frameborder="0" scrolling="no"></iframe>
            <iframe width="110" height="200" src="https://www.myinstants.com/instant/jojo-yes-yes-yes-yes-yes-61379/embed/" frameborder="0" scrolling="no"></iframe>
            <iframe width="110" height="200" src="https://www.myinstants.com/instant/tuturu/embed/" frameborder="0" scrolling="no"></iframe>
            <iframe width="110" height="200" src="https://www.myinstants.com/instant/onii-chan-onii-chan/embed/" frameborder="0" scrolling="no"></iframe>
            <iframe width="110" height="200" src="https://www.myinstants.com/instant/windows-10-usb-connect-38512/embed/" frameborder="0" scrolling="no"></iframe>
            <iframe width="110" height="200" src="https://www.myinstants.com/instant/windows-10-usb-disconnect-8906/embed/" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
    --}}
    
    {{-- video #7 
    <p>cambiar el valor de otro componente</p>
    <div x-data>
        <button @click="$refs.nombre.innerHTML='Texto cambiado'">
            Hazme click
        </button>
        <p x-ref="nombre">un texto</p>
    </div>

    <p>comunicacion entre dos componentes</p>
    <div x-data="{ mensaje:null }">
        <input type="text" x-model="mensaje" @input="$dispatch('custom-event', mensaje)">
    </div>

    <div x-data="{ mensaje:null }" @custom-event.window="mensaje = $event.detail">
        <input type="text" x-model="mensaje">
    </div>
    --}}


    
</div>
