@extends('user.layouts.app-template')


@section('user.content')

<section>
	<div class="container">
		<div class="panel-body" style="margin-top:100px">
			<div class="panel-heading"><h3>About</h3></div>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="{{url('/user')}}">Home</a></li>
					<li class="breadcrumb-item active">About</li>
				</ol>

				<!-- Intro Content -->
				<div class="row">
						<div class="col-md-6"><img class="img-fluid rounded mb-4" src="https://2.bp.blogspot.com/-JWohGP_EV7w/Vvvrwcd1HQI/AAAAAAAAHJ0/gn0VbVCiGhQwTqwmQmmUZn8aIlCG_EmlQ/s1600/IMG_4125.JPG" alt=""> </div>
								<div class="col-md-6">
									<h2 style="text-align: center">Herbarium</h2>
										<p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat.</p>
										<p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, magni, aperiam vitae illum voluptatum aut sequi impedit non velit ab ea pariatur sint quidem corporis eveniet. Odit, temporibus reprehenderit dolorum!</p>
										<p style="text-align: justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis?</p>
								</div>
						</div>
							<!-- /.row -->
							<!-- <div class="col-lg-8 mb-4" id="map"> -->
									<!-- Embedded Google Map -->
										<!-- <iframe width="150%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=-6.634598, 106.825015&amp;spn=-6.634598, 106.825015&amp;t=m&amp;z=4&amp;output=embed"></iframe>
								</div> -->
								<div style="width: 1000px; height: 500px;">
									
								</div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection
