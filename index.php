<?php
	$url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");
	$url .= "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <title>HPP - Bombas e Equipamentos Industriais</title>
	  <meta name="description" content="Soluções em bombas industriais, dosadoras, medidoras, pneumáticas e centrífugas. Potência e confiabilidade para o seu negócio.">
	  <link rel="canonical" href="<?= $url; ?>">

	  <!-- Favicon -->
	  <link rel="icon" href="images/favicon.png" type="image/x-icon">

	  <!-- Open Graph (Facebook, WhatsApp) -->
	  <meta property="og:type" content="website">
	  <meta property="og:title" content="HPP - Bombas Industriais">
	  <meta property="og:description" content="Bombas dosadoras, pneumáticas e centrífugas para todo o Brasil.">
	  <meta property="og:image" content="<?= $url; ?>images/og-image.jpg"> 
	  <meta property="og:url" content="<?= $url; ?>">
	  <meta property="og:site_name" content="HPP">

	  <!-- Twitter Card -->
	  <meta name="twitter:card" content="summary_large_image">
	  <meta name="twitter:title" content="HPP - Bombas Industriais">
	  <meta name="twitter:description" content="Especialistas em soluções de bombeamento industrial.">
	  <meta name="twitter:image" content="<?= $url; ?>images/og-image.jpg">

	  <!-- Schema.org / JSON-LD -->
	  <script type="application/ld+json">
	  {
	    "@context": "https://schema.org",
	    "@type": "Organization",
	    "name": "HPP",
	    "url": "<?= $url; ?>",
	    "logo": "<?= $url; ?>images/logo.webp",
	    "contactPoint": {
	      "@type": "ContactPoint",
	      "telephone": "+55 19 99617-2707",
	      "contactType": "Customer Service",
	      "areaServed": "BR"
	    },
	    "sameAs": [
	      "https://www.instagram.com/hppbombas",
	      "https://wa.me/5519996172707"
	    ]
	  }
	  </script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body id="topo">
	<main>
		<!-- Menu -->
		<nav>
			<div class="container container-nav">
				<div class="logo-menu">
					<a href="#topo" title="HPP Bombas">
						<img loading="lazy" src="images/logo.webp" class="logo-full" alt="HPP">
						<img loading="lazy" src="images/logo-min.webp" class="logo-min" alt="HPP">
					</a>
				</div>
				<div class="ent-menu-responsivo">
					<button class="close-menu" title="Fechar Menu">
						<i class="fa-solid fa-xmark"></i>
					</button>
					<ul>
						<li>
							<a class="menu-link active" href="#topo" title="Início">Início</a>
						</li>
						<li>
							<a class="menu-link" href="#sobre" title="Sobre a HPP">Sobre a HPP</a>
						</li>
						<li>
							<a class="menu-link" href="#porque" title="Por Que Escolher?">Por Que Escolher?</a>
						</li>
						<li>
							<a class="menu-link" href="#aplicacoes" title="Aplicações">Aplicações</a>
						</li>
						<li>
							<a class="menu-link" href="#modelos" title="Modelos">Modelos</a>
						</li>
						<li>
							<a class="menu-link" href="#contato" title="Fale com um Consultor">Fale com um Consultor</a>
						</li>
					</ul>
				</div>
				<div class="social-menu">
					<a href="https://wa.me/5519996172707" target="_blank" title="Whatsapp HPP">
						<i class="fab fa-whatsapp"></i>
					</a>
					<button class="open-menu" title="abrir menu">
						<i class="fa-solid fa-bars-staggered"></i>
					</button>
				</div>
			</div>
		</nav>
		<!-- Menu -->

		<!-- Header -->
		<header>
			<div class="container">
				<div class="row">
					<div class="w-6">
						<div class="image-50-w">
							<img loading="lazy" src="images/1.webp" class="img-full-fit" alt="Saneamento Básico">
							<img loading="lazy" src="images/tag.webp" alt="Saneamento Básico">
						</div>
					</div>
					<div class="w-6">
						<div class="ent-text-header">
							<h1><strong>Potência e<br>confiabilidade<br></strong>para os desafios<br>do saneamento.</h1>
							<p>As bombas HPP <strong>atuam com eficiência</strong><br>nas aplicações mais críticas.</p>
							<a href="#contato" title="Fale com um Consultor">
								<button>Fale com um Consultor Técnico</button>
							</a>
							<img loading="lazy" src="images/1-1.webp" alt="Produtos saneamento básico header">
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- Header -->

		<!-- Divisor header -->
		<div class="divider-header"></div>
		<!-- Divisor header -->

		<!-- Sobre -->
		<section id="sobre">
			<div class="container">
				<div class="row">
					<div class="w-6">
						<h2>SOBRE <strong>A HPP</strong></h2>
						<p class="dark">A HPP (High Pressure Pumps) <strong>é referência internacional em tecnologia de bombas de alta pressão</strong>, reconhecida pela robustez, confiabilidade e alto desempenho de seus produtos. Com fabricação italiana e know-how tecnológico avançado, atendendo com excelência os setores industriais.</p>

						<p class="dark">Fundada em 1994, a <strong>HPP faz parte do Grupo Comet, ao lado das marcas Lavor e Lemasa</strong>, e é especializada na fabricação de bombas de pistão de alta pressão. No Brasil, além da distribuição de equipamentos, oferece atendimento técnico, suporte especializado e uma linha completa de bombas com padrão internacional de qualidade, <strong>desenvolvidas para atender as mais diversas aplicações industriais.</strong></p>
					</div>
					<div class="w-6">
						<div class="image-50-w image-50-w-invert image-50-w-spaced">
							<img loading="lazy" src="images/2.webp" class="img-full-fit" alt="Sobre a HPP">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Sobre -->

		<!-- Por que escolher -->
		<section id="porque">
			<div class="container">
				<div class="row">
					<div class="w-6">
						<div class="image-50-w">
							<img loading="lazy" src="images/3.webp" class="img-full-fit" alt="Por que escolher a HPP para sua operação industrial?">
						</div>
					</div>
					<div class="w-6 w-cards-icons">
						<h2>Por que escolher a HPP para sua operação industrial?</h2>
						<p><strong>Alto desempenho</strong> na remoção de incrustações em redes de esgoto, galerias, caixas de gordura, canaletas, entre outros.</p>

						<div class="row row-cards">
							<div class="w-1">
								<img loading="lazy" src="images/ic-1.webp" alt="Maior durabilidade">
							</div>
							<div class="w-5">
								<h3>Maior durabilidade</h3>
							</div>
							<div class="w-1">
								<img loading="lazy" src="images/ic-2.webp" alt="Assistência técnica especializada">
							</div>
							<div class="w-5">
								<h3>Assistência técnica especializada</h3>
							</div>
							<div class="w-1">
								<img loading="lazy" src="images/ic-3.webp" alt="3 anos de garantia">
							</div>
							<div class="w-5">
								<h3>3 anos de garantia</h3>
							</div>
							<div class="w-1">
								<img loading="lazy" src="images/ic-4.webp" alt="Tecnologia italiana">
							</div>
							<div class="w-5">
								<h3>Tecnologia italiana</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Por que escolher -->

		<!-- Divisor header -->
		<div class="divider-sobre"></div>
		<!-- Divisor header -->

		<!-- Produtos -->
		<section class="produtos-carrosel" id="modelos">
			<div class="container">
				<div class="row">
					<div class="w-12">
						<h2><strong>Modelos</strong> de Bombas</h2>
						<p class="dark">Modelos indicados para o setor de saneamento:</p>

						<div class="ent-carrosel-inv">
						    <div class="carrosel">
						    	<div class="produto-card">
						    		<img loading="lazy" src="images/produtos/1.webp" data-name="Produto 1" alt="Produto 1">
						    	</div>
						    	<div class="produto-card">
						    		<img loading="lazy" src="images/produtos/2.webp" data-name="Produto 2" alt="Produto 2">
						    	</div>
						    	<div class="produto-card">
						    		<img loading="lazy" src="images/produtos/3.webp" data-name="Produto 3" alt="Produto 3">
						    	</div>
						    	<div class="produto-card">
						    		<img loading="lazy" src="images/produtos/1.webp" data-name="Produto 1" alt="Produto 1">
						    	</div>
						    	<div class="produto-card">
						    		<img loading="lazy" src="images/produtos/2.webp" data-name="Produto 2" alt="Produto 2">
						    	</div>
						    	<div class="produto-card">
						    		<img loading="lazy" src="images/produtos/3.webp" data-name="Produto 3" alt="Produto 3">
						    	</div>
						    </div>
						    <div class="carrosel-buttons">
						    	<ul class="left-carrosel">
							        <li class="carrosel-prev" style="">
							            <span class="btn-slider">
							            	<i class="fa-solid fa-chevron-left"></i>
							            </span>
							        </li>
							    </ul>
							    <span class="nome-produto"></span>
							    <ul class="right-carrosel">
							        <li class="carrosel-next" style="">
							            <span class="btn-slider">
							            	<i class="fa-solid fa-chevron-right"></i>
							            </span>
							        </li>
							    </ul>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Produtos -->

		<!-- Aplicações -->
		<section id="aplicacoes">
			<div class="container">
				<div class="row">
					<div class="w-5">
						<h2><strong>Aplicações das Bombas HPP no Setor de Saneamento</strong></h2>
						<p class="dark">Com versatilidade para múltiplas aplicações dentro do próprio setor, as bombas HPP contribuem diretamente para a eficiência dos serviços de saneamento básico. Desenvolvidas para atuar com, são ideais para:</p>

						<ul>
							<li>Desentupimento de redes de esgoto</li>
							<li>Limpeza de tubulações diversas</li>
							<li>Manutenção de bocas de lobo</li>
							<li>Desobstrução de galerias de esgoto e águas pluviais</li>
							<li>Limpeza de caixas de gordura</li>
							<li>Higienização de fossas sanitárias</li>
						</ul>
					</div>
					<div class="w-1"></div>
					<div class="w-6">
						<div class="image-50-w image-50-w-invert">
							<img loading="lazy" src="images/4.webp" class="img-full-fit" alt="Aplicações">
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Aplicações -->

		<!-- Contato -->
		<section id="contato">
			<div class="container">
				<div class="row">
					<div class="w-12">
						<h2>Pronto para encontrar a solução<br>ideal para o seu negócio?</h2>
						<a href="https://wa.me/5519996172707" target="_blank" title="Whatsapp HPP">
							<button class="btn-contact">Fale com um de nossos consultores técnicos</button>
						</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Contato -->

		<!-- Divisor header -->
		<div class="divider-header"></div>
		<!-- Divisor header -->

		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="w-3">
						<a href="#topo" title="HPP Bombas">
							<img loading="lazy" src="images/logo.webp" alt="HPP">
						</a>
						<p>Conhecida mundialmente a HPP produz bombas e acessórios de hidrojateamento de alta pressão.</p>
					</div>
					<div class="w-4">
						<h3>Endereço</h3>
						<p>Rodovia Engenheiro Ermênio de Oliveira Penteado<br>Av. Helvetia, Km 58 – Indaiatuba/SP<br>CEP: 13337-300</p>
						<h3>Contato</h3>
						<p>comercial@bombashpp.com.br<br>(19) 99617-2707</p>
					</div>
					<div class="w-3">
						<h3>Menu</h3>
						<ul>
							<li>
								<a href="#topo" title="Início">Início</a>
							</li>
							<li>
								<a href="#sobre" title="Sobre a HPP">Sobre a HPP</a>
							</li>
							<li>
								<a href="#porque" title="Por Que Escolher?">Por Que Escolher?</a>
							</li>
							<li>
								<a href="#aplicacoes" title="Aplicações">Aplicações</a>
							</li>
							<li>
								<a href="#modelos" title="Modelos">Modelos</a>
							</li>
							<li>
								<a href="#contato" title="Fale com um Consultor">Fale com um Consultor</a>
							</li>
						</ul>
					</div>
					<div class="w-2">
						<h3>Nossas redes</h3>
						<p class="social-links">
							<a href="https://www.instagram.com/bombashpp/" title="Instagram HPP" target="_blank">
								<i class="fab fa-instagram"></i>
							</a>
							<a href="https://wa.me/5519996172707" target="_blank" title="Whatsapp HPP">
								<i class="fab fa-whatsapp"></i>
							</a>
							<strong>@bombashpp</strong>
						</p>
					</div>
				</div>
			</div>
			<div class="footer-copy">
				<p>HPP - Todos os direitos reservados | Desenvolvimento <a title="Zoomfoccus" href="https://zoomfoccus.com.br" target="_blank">zoomfoccus.com.br</a></p>
			</div>
		</footer>
		<!-- Footer -->

		<a href="#topo" title="Voltar ao topo">
			<button class="go-top">
				<i class="fa-solid fa-chevron-up"></i>
			</button>
		</a>
	</main>

	<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

	<script>
		// Scroll
		$('a[href^="#"]').on('click',function(e) {
			e.preventDefault();
			var target = this.hash;
			var $target = $(target);

			$('html, body').stop().animate({
				'scrollTop': $target.offset().top-100
			}, 500, 'swing', function(){});
		});

		$(document).ready(function() {
			// abrir e fechar menu
			$('.ent-menu-responsivo a').on('click', function() {
				$('.ent-menu-responsivo').removeClass('active');
			})

			$('.ent-menu-responsivo button').on('click', function() {
				$('.ent-menu-responsivo').removeClass('active');
			})

			$('section').on('click', function() {
				$('.ent-menu-responsivo').removeClass('active');
			})

			$('header').on('click', function() {
				$('.ent-menu-responsivo').removeClass('active');
			})

			$('.open-menu').on('click', function() {
				$('.ent-menu-responsivo').addClass('active');
			})

			// Voltar ao topo e menu fixo
			$(window).scroll(function () {
				if($(window).scrollTop() > 240) {
					$("nav").addClass('stick');
					$(".go-top").addClass('active');
				} else {
					$("nav").removeClass('stick');
					$(".go-top").removeClass('active');
				}
			});

			let $links = $('.menu-link');

			$(window).on('scroll', function () {
				let scrollPos = $(window).scrollTop() + ($(window).height() / 2);

				$links.each(function () {
					let href = $(this).attr('href');
					let target = $(href);

					if (target.length) {
						let top = target.offset().top;
						let bottom = top + target.outerHeight();

						if (scrollPos >= top && scrollPos < bottom) {
							$links.removeClass('active');
							$(this).addClass('active');
						}
					}
				});
			});

		    // Inicializa o slick com centerMode
		    $('.carrosel').slick({
		        dots: false,
		        arrows: true,
		        infinite: true,
		        speed: 400,
		        slidesToShow: 1,
		        slidesToScroll: 1,
		        centerMode: true, // Ativa centralização
		        centerPadding: '30%', // Espaço para mostrar anterior/próximo
		        prevArrow: $('.carrosel-prev'),
		        nextArrow: $('.carrosel-next')
		    });

		    // Função para atualizar nome do produto central
		    function atualizarNomeProduto() {
		        var slideAtual = $('.carrosel .slick-center img');
		        var nome = slideAtual.data('name');
		        $('.nome-produto').text(nome);
		    }

		    // Função para remover foco de slides ocultos (acessibilidade)
		    function corrigirAcessibilidade() {
		        $('.carrosel .slick-slide').each(function() {
		            const $el = $(this);
		            const isHidden = $el.attr('aria-hidden') === 'true';

		            if (isHidden) {
		                $el.attr('tabindex', '-1');
		                $el.find('*').attr('tabindex', '-1'); // evita foco em filhos
		            } else {
		                $el.removeAttr('tabindex');
		                $el.find('*').removeAttr('tabindex');
		            }
		        });
		    }

		    // Chama ao iniciar
		    atualizarNomeProduto();
		    corrigirAcessibilidade();

		    // Chama sempre que mudar o slide
		    $('.carrosel').on('afterChange', function(event, slick, currentSlide){
		        atualizarNomeProduto();
		        corrigirAcessibilidade();
		    });
		});
	</script>
</body>
</html>