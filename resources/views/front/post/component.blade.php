
  
            <article class="card card--1">
            <div class="card__info-hover">
               
                <div class="card__clock-info">
                    <svg class="card__clock"  viewBox="0 0 24 24"><path d="M12,20A7,7 0 0,1 5,13A7,7 0 0,1 12,6A7,7 0 0,1 19,13A7,7 0 0,1 12,20M19.03,7.39L20.45,5.97C20,5.46 19.55,5 19.04,4.56L17.62,6C16.07,4.74 14.12,4 12,4A9,9 0 0,0 3,13A9,9 0 0,0 12,22C17,22 21,17.97 21,13C21,10.88 20.26,8.93 19.03,7.39M11,14H13V8H11M15,1H9V3H15V1Z" />
                    </svg><span class="card__time">15 min</span>
                </div>
                
            </div>
            <div class="card__img" style="background-image: url( {{ Voyager::image( $post->image ) }})"></div>
            <a href="blog/{{ $post->slug }}" class="card_link">
                <div class="card__img--hover" style="background-image: url( {{ Voyager::image( $post->image ) }})"></div>
            </a>
            <div class="card__info">
                <span class="card__category"> Blog post</span>
                <h3 class="card__title">{{ $post->title }}</h3>
            </div>
            </article>   
      
         
