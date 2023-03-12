<x-guest-layout title="Guardería">
    <x-page-cover img="img/Educaescopio_Estancia_Infantil_Preescolar_Tijuana_Mi_Pequeno_Travieso_Interior_Libros.JPG" title="Guardería / Maternal" description="El objetivo fundamental de la educación temprana es contribuir con el desarrollo infantil, para lo cual se requiere ofrecerle una atención integral en un ambiente de calidad que favorezca su crecimiento y desarrollo en los aspectos físico, cognitivos, socioemocionales, psicomotrices y del lenguaje.">
        <x-slot:call_to_action>
            <a href="#requisitos" class="btn btn-secondary">
                Requisitos
            </a>
            <a href="{{ route('contact') }}" class="btn btn-primary">
                Inscripciones
            </a>
        </x-slot:call_to_action>
    </x-page-cover>
    <x-page-features-img-right img="img/markus-spiske-OO89_95aUC0-unsplash.jpg" alt="Niños jugando en el patio" title="Trabajar la pedagogia de la ternura con base en la crianza consciente y respetuosa.">

        <div class="flex items-start flex-col md:flex-row md:space-x-10 mt-10">
            <ul class="list-lg flex-1">
                <li>
                    <i class="fa fa-star"></i>
                    Estimulación sensorial
                </li>
                <li>
                    <i class="fa fa-star"></i>
                    Guias educativas
                </li>
                <li>
                    <i class="fa fa-star"></i>
                    Grupos reducidos
                </li>
                <li>
                    <i class="fa fa-star"></i>
                    Socialización
                </li>
            </ul>

            <ul class="list-lg flex-1">
                <li>
                    <i class="fa fa-star"></i>
                    Lenguaje y literacidad
                </li>
                <li>
                    <i class="fa fa-star"></i>
                    Desarrollo motor
                </li>
                <li>
                    <i class="fa fa-star"></i>
                    Nutrición y salud
                </li>
                <li>
                    <i class="fa fa-star"></i>
                    Control de esfínteres
                </li>
            </ul>
        </div>

    </x-page-features-img-right>
    <section class="bg-white">
        <x-page-features-img-left img="img/pexels-cottonbro-studio-3661351.jpg" alt="Niños jugando en el patio" title="Requisitos para inscripción" id="requisitos">

            <p class="mb-6 lead">
                Se presentarán documentos originales para cotejo y una copia legible del documento completo (anverso y reverso).
            </p>

            <ul class="list-sm">
                <li><i class="fa fa-star"></i> Solicitud de inscripción.</li>
                <li><i class="fa fa-star"></i> Acta de nacimiento (3 copias).</li>
                <li><i class="fa fa-star"></i> CURP</li>
                <li><i class="fa fa-star"></i> 3 fotografías tamaño credencial.</li>
                <li><i class="fa fa-star"></i> Cartilla de vacunación.</li>
                <li><i class="fa fa-star"></i> Copia de identificación de los padres.</li>
                <li><i class="fa fa-star"></i> Copia de identificaciones oficiales de personas autorizadas a recoger al menor.</li>
                <li><i class="fa fa-star"></i> Carta de presentación del menor por los padres de familia.</li>
                <li><i class="fa fa-star"></i> Copia de recibo de servicios CESPT.</li>
                <li><i class="fa fa-star"></i> Reporte psicopedagógico con datos del contacto del terapeuta (si aplica).</li>
                <li><i class="fa fa-star"></i> Firma de aceptación del contrato de servicios.</li>
                <li><i class="fa fa-star"></i> Carta compromiso de los padres.</li>
                <li><i class="fa fa-star"></i> Aviso de privacidad.</li>
            </ul>

        </x-page-features-img-left>
    </section>
</x-guest-layout>