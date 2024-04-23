<footer>
    <div class="sites">
      <div class="container_list">
        <col-4>
          <ul>
            <li class="title_white">DC COMICS</li>
            <li>Characters</li>
            <li>Comics</li>
            <li>Movies</li>
            <li>TV</li>
            <li>Games</li>
            <li>Videos</li>
            <li>News</li>
          </ul>
        </col-4>
        <col-4>
          <ul>
            <li class="title_white">DC</li>
            <li>Terms Of Use</li>
            <li>Privacy policy (New)</li>
            <li>Ad Choices</li>
            <li>Advertising</li>
            <li>Jobs</li>
            <li>Subscriptions</li>
            <li>Talent Workshops</li>
            <li>CPSC Certificates</li>
            <li>Ratings</li>
            <li>Shop Help</li>
            <li>Contact Us</li>
          </ul>
        </col-4>
        <col-4>
          <ul>
            <li class="title_white">SITES</li>
            <li>DC</li>
            <li>MAD Magazine</li>
            <li>DC Kids</li>
            <li>DC Universe</li>
            <li>DC Power Visa</li>
          </ul>
        </col-4>
        <col-4>
          <ul>
            <li class="title_white">SHOP</li>
            <li>Shop DC</li>
            <li>Shop Dc Collectibles</li>
          </ul>
        </col-4>
      </div>
      <div class="logo_bg">
        <img src="/img/dc-logo-bg.png" alt="" />
      </div>
    </div>
    <div class="follow">
      <div class="sign"><button>SIGN-UP NOW!</button></div>
      <div class="social">
        <p>FOLLOW US</p>
        <a href="#"
          ><img src="/img/footer-facebook.png" alt="link_facebook"
        /></a>
        <a href="#"
          ><img src="/img/footer-twitter.png" alt="link_twitter"
        /></a>
        <a href="#"
          ><img src="/img/footer-youtube.png" alt="link_youtube"
        /></a>
        <a href="#"
          ><img src="/img/footer-pinterest.png" alt="link_pinterest"
        /></a>
        <a href="#"
          ><img src="/img/footer-periscope.png" alt="link_pirescope"
        /></a>
      </div>
    </div>
  </footer>


<style>
.sites {
  width: 100%;
  min-height: 370px;
  background-image: url(/img/footer-bg.jpg);
  background-size: cover;
  display: flex;
  justify-content: space-around;
  & img {
    width: 450px;
    position: absolute;
    left: 1130px;
  }
  & .container_list {
    display: flex;
    flex-wrap: wrap;
    width: 25%;
    & li {
      color: var(--dc-lightgray);
      margin: 0 15px;
      list-style: none;
    }
    .title_white {
      color: var(--dc-light);
      margin: 15px;
    }
  }
}
.col-4 {
  width: calc(100% / 12 * 4);
}
.follow {
  width: 100%;
  height: 110px;
  background: var(--dc-gray);
  position: absolute;
  display: flex;
  justify-content: space-around;
  align-items: center;
  & button {
    width: 145px;
    height: 50px;
    border: 2px solid var(--dc-primary);
    color: var(--dc-light);
    background: var(--dc-gray);
  }
}
.social {
  display: flex;
  align-items: center;
  & p {
    color: var(--dc-primary);
    margin: 0 10px;
  }
  & a {
    margin: 0 10px;
  }
}
</style>
