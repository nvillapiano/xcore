<!-- Case study -->

<section class="case-study">

    <div class="hero">
        <div class="hero-wrapper">
            <div class="copy">
                <div class="breadcrumbs">
                    <a href="home">Home</a> > {{ hasBreadcrumbDepth ? '<a href="home">Solutions</a> > ' }} <a href="healthcare">Healthcare</a> > <a class="active" href="{{title|lower|replace({' ': '-'})}}">{{title}}</a>
                </div>
                <h2>
                    {{title}}
                </h2>

                <h4>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sed tristique justo. Nam in felis quis odio tempor ullamcorper at sed quam. Aliquam erat volutpat. Quisque non ultricies metus.
                </h4>

                <section class="case-study--links">
                    <h3>
                        <a href="#">What is it?</a>
                    </h3>
                    <h3>
                        <a href="#">Usage Today</a>
                    </h3>
                    <h3>
                        <a href="#">Adapting technology to the card</a>
                    </h3>
                    <h3>
                        <a href="#">XCore's process</a>
                    </h3>
                    <h3>
                        <a href="#">CONTACT US</a>
                    </h3>
                </section>
            </div>
            <div class="image" style="background-image: url('images/nfc-hero.png');">
            </div>
        </div>
    </div>
    <section class="use-cases">
        {% include 'components/use-case.twig' with
            {
                title: 'What is it?',
                iconSrc: 'images/icon1.svg'
            }
        %}
        {% include 'components/use-case.twig' with
            {
                title: 'Usage today',
                iconSrc: 'images/icon2.svg'
            }
        %}
        {% include 'components/use-case.twig' with
            {
                title: 'Adapting technology to the card',
                iconSrc: 'images/icon3.svg'
            }
        %}
        {% include 'components/use-case.twig' with
            {
                title: "XCore's process",
                iconSrc: 'images/icon4.svg'
            }
        %}
        {% include 'components/use-case.twig' with
            {
                title: 'CONTACT US',
                isContact: true
            }
        %}
    </section>

</section>
