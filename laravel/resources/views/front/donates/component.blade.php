
<div class="donate__container">
	<div class="donate"><img class="donate__img" src="/storage/pages/June2020/zulQnovzCEzj.gif"/>
	  <div class="donate__content">
		<header>
		  <p class="donate__content__date">{{ $pay->created_at }}</p>
		  <h1 class="donate__content__title">{{ $pay->donater_name }}</h1>
		</header>
		<article class="donate__content__text">
			{{ $pay->message }}
		</article>
		<div class="donate__content__button">Donated €{{ $pay->payment_amount }}</div>
	  </div>
	  <div class="donate__pagination">
		<div class="donate__pagination__item"></div>
		<div class="donate__pagination__item donate__pagination__item--active"></div>
		<div class="donate__pagination__item"></div>
	  </div>
	</div>
</div>

  <!--<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
                <h1>{{ $pay->donater_name }}</h1>
				<h1>{{ $pay->payment_amount }}</h1>
				<p>{{  $pay->message  }}</p>
            </div>
		</div>
	</div>
-->
      
         
