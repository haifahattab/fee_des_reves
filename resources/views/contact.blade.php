<!------------------- header -------------------->

@extends('layouts.headerFooter')
@section('content')
<!------------------- contact ------------------->
<div class="container-fluid">
    <section class='contact'>
        <h2 class="mb-5">CONTACTEZ-NOUS</h2>
        
        <div class="row mb-5">
        <div class="offset-lg-2 col-lg-4 col-sm-12 form form__contact">
        @if(session('flash'))
            <h3 class="text-success">{{ session('flash') }}</h3>
        @endif
        <form method="post" action="contact" class="Form-group p-lg-3 rounded">
            @csrf
            <h4>Envoyez-nous votre demande, nous allons l'étudier et vous répondrons dans les meilleurs délais</h4>
            <div class="form-group mt-5">
                <input type="text" class="form-control" name="name" id="nom" placeholder="Nom & Prénom" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" name="email" id="imail" placeholder="Adresse email" required>
            </div>
            <div class="form-group">
                <input type="phone" class="form-control" name="phone" id="phone" placeholder="N° de téléphone" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" name="message" id="message" placeholder="Message ou demande de devis" required></textarea>
            </div>
            <button name="submit" class="mb-2 mr-0 button">Valider</button>
            
        </form>
        </div>
        <div class="col-lg-5 col-sm-12 p-5 image-form "> 
            <div class="form_text">
                <h4>contact@feedesreves.com</h4><br>
                <h4>(+33)7 12 34 56 78</h4><br>
                <p>Envoyez-nous un e-mail ou appelez-nous pour discuter de vos idées et besoins. 
                Nous proposerons et préparerons une offre adaptée à vos besoins.
                </p><br>
            <p>Ou bien rencontrons-nous dans notre bureau afin que nous puissions réaliser vos rêves. 
                Si vous avez des inspirations - décoration, fleurs / couleurs - apportez-les avec vous!
                </p><br>
                <h3>06600 ANTIBES, FRANCE</h3>
            </div>
                
        </div>
       
        </div>

    </section>
</div>
@endsection