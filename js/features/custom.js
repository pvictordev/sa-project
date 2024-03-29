//header
class CustomHeader extends HTMLElement {
  constructor() {
    super();
  }
  connectedCallback() {
    this.innerHTML = `
      <nav class="navbar navbar-expand-lg fixed-top">
      <div class="container">
        <a class="navbar-brand logo" href="index.html">
          <img alt="Free Frontend Logo" class="img-fluid" height="" src="assets/favicon.svg">
          <span class="gradient-text fw-bold fs-2">Phlexi</span>
        </a> 
        <button aria-controls="navbarSupportedContent9" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler collapsed" data-bs-target="#navbarSupportedContent9" data-bs-toggle="collapse" type="button">
          <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M5 12H18" stroke="var(--primary-color)" stroke-width="2" stroke-linecap="round"/>
          <path d="M5 17H11" stroke="var(--primary-color)" stroke-width="2" stroke-linecap="round"/>
          <path d="M5 7H15" stroke="var(--primary-color)" stroke-width="2" stroke-linecap="round"/>
          </svg>
        </span>
        </button>
        <div class="navbar-collapse collapse" id="navbarSupportedContent9" style="">
          <form class="d-flex align-items-center position-relative ms-lg-3">
            <div class="input-group align-items-center mt-3 mt-lg-0">
              <input aria-describedby="button-addon2" aria-label="Search" class="form-control" placeholder="Search" type="text"> 
              <button class="btn bg-white border" id="button-addon2" type="button">
                <svg class="bi bi-search" fill="currentColor" height="20" viewBox="0 0 16 16" width="20" xmlns="http://www.w3.org/2000/svg">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"></path></svg>
            </button>
            </div>
          </form>
          <ul class="navbar-nav ms-auto my-2 my-lg-0">
            <li class="nav-item me-4">
              <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="team.html">Team</a>
            </li>
            <li class="nav-item me-4">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
              <div class="dropdown-menu" aria-labelledby="dropdown03">
                <a class="dropdown-item" href="market.html">Marketplace</a>
                <a class="dropdown-item" href="#">Find Work</a>                
                <a class="dropdown-item" href="#">Sign Up</a>
              </div>
            </li>
          
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle btn" id="dropdown03" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg width="24px" height="24px" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
                  <title>dark-mode</title>
                  <g id="Layer_2" data-name="Layer 2">
                    <g id="Icons">
                      <g>
                        <rect width="48" height="48" fill="none"/>
                        <g>
                          <path d="M14,24A10,10,0,0,0,24,34V14A10,10,0,0,0,14,24Z" fill="var(--primary-color)"/>
                          <path d="M24,2A22,22,0,1,0,46,24,21.9,21.9,0,0,0,24,2ZM6,24A18.1,18.1,0,0,1,24,6v8a10,10,0,0,1,0,20v8A18.1,18.1,0,0,1,6,24Z" fill="var(--primary-color)"/>
                        </g>
                      </g>
                    </g>
                  </g>
                </svg>
              </a>
              <div class="dropdown-menu" aria-labelledby="dropdown03">
                <button class="dropdown-item" id="light-theme" >Light</button>
                <button class="dropdown-item" id="dark-theme" >Dark</button>
                <!-- <button class="dropdown-item">Auto</button> !-->
              </div>
            </li>  
          </ul>
        </div>
      </div>
    </nav>
          `;
  }
}
customElements.define("custom-header", CustomHeader);

//footer
class CustomFooter extends HTMLElement {
  constructor() {
    super();
  }
  connectedCallback() {
    this.innerHTML = `
      <footer class="footer-section pt-7">
      <div class="footer">
        <div class="row justify-content-between pt-4 pb-3 pb-lg-5">
          <div class="col-12 col-lg-7">
            <div class="logo">
              <img alt="Free Frontend Logo" class="img-fluid" src="./assets/favicon.svg">
              <span class="gradient-text fw-bold fs-2">Phlexi</span>
            </div>
            <p class="mb-3"> Here you can find additional info about us, our team and our opportunities </p>
            <div class="mb-3">
              <a class="me-2" href="">
                <svg width="30" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M12 18C15.3137 18 18 15.3137 18 12C18 8.68629 15.3137 6 12 6C8.68629 6 6 8.68629 6 12C6 15.3137 8.68629 18 12 18ZM12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" fill="var(--primary-color)"/>
                <path d="M18 5C17.4477 5 17 5.44772 17 6C17 6.55228 17.4477 7 18 7C18.5523 7 19 6.55228 19 6C19 5.44772 18.5523 5 18 5Z" fill="var(--primary-color)"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.65396 4.27606C1 5.55953 1 7.23969 1 10.6V13.4C1 16.7603 1 18.4405 1.65396 19.7239C2.2292 20.8529 3.14708 21.7708 4.27606 22.346C5.55953 23 7.23969 23 10.6 23H13.4C16.7603 23 18.4405 23 19.7239 22.346C20.8529 21.7708 21.7708 20.8529 22.346 19.7239C23 18.4405 23 16.7603 23 13.4V10.6C23 7.23969 23 5.55953 22.346 4.27606C21.7708 3.14708 20.8529 2.2292 19.7239 1.65396C18.4405 1 16.7603 1 13.4 1H10.6C7.23969 1 5.55953 1 4.27606 1.65396C3.14708 2.2292 2.2292 3.14708 1.65396 4.27606ZM13.4 3H10.6C8.88684 3 7.72225 3.00156 6.82208 3.0751C5.94524 3.14674 5.49684 3.27659 5.18404 3.43597C4.43139 3.81947 3.81947 4.43139 3.43597 5.18404C3.27659 5.49684 3.14674 5.94524 3.0751 6.82208C3.00156 7.72225 3 8.88684 3 10.6V13.4C3 15.1132 3.00156 16.2777 3.0751 17.1779C3.14674 18.0548 3.27659 18.5032 3.43597 18.816C3.81947 19.5686 4.43139 20.1805 5.18404 20.564C5.49684 20.7234 5.94524 20.8533 6.82208 20.9249C7.72225 20.9984 8.88684 21 10.6 21H13.4C15.1132 21 16.2777 20.9984 17.1779 20.9249C18.0548 20.8533 18.5032 20.7234 18.816 20.564C19.5686 20.1805 20.1805 19.5686 20.564 18.816C20.7234 18.5032 20.8533 18.0548 20.9249 17.1779C20.9984 16.2777 21 15.1132 21 13.4V10.6C21 8.88684 20.9984 7.72225 20.9249 6.82208C20.8533 5.94524 20.7234 5.49684 20.564 5.18404C20.1805 4.43139 19.5686 3.81947 18.816 3.43597C18.5032 3.27659 18.0548 3.14674 17.1779 3.0751C16.2777 3.00156 15.1132 3 13.4 3Z" fill="var(--primary-color)"/>
                </svg>
              </a> 
              <a class="me-2" href="">
                <svg fill="var(--primary-color)" width="35px" height="35px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2.03998C6.5 2.03998 2 6.52998 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.84998C10.44 7.33998 11.93 5.95998 14.22 5.95998C15.31 5.95998 16.45 6.14998 16.45 6.14998V8.61998H15.19C13.95 8.61998 13.56 9.38998 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96C15.9164 21.5878 18.0622 20.3855 19.6099 18.57C21.1576 16.7546 22.0054 14.4456 22 12.06C22 6.52998 17.5 2.03998 12 2.03998Z"/>
                </svg>
              </a> 
              <a class="me-2" href="">
                <svg width="30px" height="30px" viewBox="0 0 24 24" fill="var(--primary-color)" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M19.7828 3.91825C20.1313 3.83565 20.3743 3.75444 20.5734 3.66915C20.8524 3.54961 21.0837 3.40641 21.4492 3.16524C21.7563 2.96255 22.1499 2.9449 22.4739 3.11928C22.7979 3.29366 23 3.6319 23 3.99986C23 5.08079 22.8653 5.96673 22.5535 6.7464C22.2911 7.40221 21.9225 7.93487 21.4816 8.41968C21.2954 11.7828 20.3219 14.4239 18.8336 16.4248C17.291 18.4987 15.2386 19.8268 13.0751 20.5706C10.9179 21.3121 8.63863 21.4778 6.5967 21.2267C4.56816 20.9773 2.69304 20.3057 1.38605 19.2892C1.02813 19.0108 0.902313 18.5264 1.07951 18.109C1.25671 17.6916 1.69256 17.4457 2.14144 17.5099C3.42741 17.6936 4.6653 17.4012 5.6832 16.9832C5.48282 16.8742 5.29389 16.7562 5.11828 16.6346C4.19075 15.9925 3.4424 15.1208 3.10557 14.4471C2.96618 14.1684 2.96474 13.8405 3.10168 13.5606C3.17232 13.4161 3.27562 13.293 3.40104 13.1991C2.04677 12.0814 1.49999 10.5355 1.49999 9.49986C1.49999 9.19192 1.64187 8.90115 1.88459 8.71165C1.98665 8.63197 2.10175 8.57392 2.22308 8.53896C2.12174 8.24222 2.0431 7.94241 1.98316 7.65216C1.71739 6.3653 1.74098 4.91284 2.02985 3.75733C2.1287 3.36191 2.45764 3.06606 2.86129 3.00952C3.26493 2.95299 3.6625 3.14709 3.86618 3.50014C4.94369 5.36782 6.93116 6.50943 8.78086 7.18568C9.6505 7.50362 10.4559 7.70622 11.0596 7.83078C11.1899 6.61019 11.5307 5.6036 12.0538 4.80411C12.7439 3.74932 13.7064 3.12525 14.74 2.84698C16.5227 2.36708 18.5008 2.91382 19.7828 3.91825ZM10.7484 9.80845C10.0633 9.67087 9.12171 9.43976 8.09412 9.06408C6.7369 8.56789 5.16088 7.79418 3.84072 6.59571C3.86435 6.81625 3.89789 7.03492 3.94183 7.24766C4.16308 8.31899 4.5742 8.91899 4.94721 9.10549C5.40342 9.3336 5.61484 9.8685 5.43787 10.3469C5.19827 10.9946 4.56809 11.0477 3.99551 10.9046C4.45603 11.595 5.28377 12.2834 6.66439 12.5135C7.14057 12.5929 7.49208 13.0011 7.49986 13.4838C7.50765 13.9665 7.16949 14.3858 6.69611 14.4805L5.82565 14.6546C5.95881 14.7703 6.103 14.8838 6.2567 14.9902C6.95362 15.4727 7.65336 15.6808 8.25746 15.5298C8.70991 15.4167 9.18047 15.6313 9.39163 16.0472C9.60278 16.463 9.49846 16.9696 9.14018 17.2681C8.49626 17.8041 7.74425 18.2342 6.99057 18.5911C6.63675 18.7587 6.24134 18.9241 5.8119 19.0697C6.14218 19.1402 6.48586 19.198 6.84078 19.2417C8.61136 19.4594 10.5821 19.3126 12.4249 18.6792C14.2614 18.0479 15.9589 16.9385 17.2289 15.2312C18.497 13.5262 19.382 11.1667 19.5007 7.96291C19.51 7.71067 19.6144 7.47129 19.7929 7.29281C20.2425 6.84316 20.6141 6.32777 20.7969 5.7143C20.477 5.81403 20.1168 5.90035 19.6878 5.98237C19.3623 6.04459 19.0272 5.94156 18.7929 5.70727C18.0284 4.94274 16.5164 4.43998 15.2599 4.77822C14.6686 4.93741 14.1311 5.28203 13.7274 5.89906C13.3153 6.52904 13 7.51045 13 8.9999C13 9.28288 12.8801 9.5526 12.6701 9.74221C12.1721 10.1917 11.334 9.92603 10.7484 9.80845Z" fill="var(--primary-color)"/>
                </svg>
              </a>
            </div>
          </div>
          <div class="navigation text-secondary col-12 col-lg-2 large text-lg-end mb-4 md-lg-0 pt-1">
            <p class="mb-1"><a class="text-decoration-none text-secondary" href="#home">Home</a></p>
            <p class="mb-1"><a class="text-decoration-none text-secondary" href="#history">History</a></p>
            <p class="mb-1"><a class="text-decoration-none text-secondary" href="#features">Features</a></p>
            <p class="mb-0"><a class="text-decoration-none text-secondary" href="#testimonials">Testimonials</a></p>
          </div>
          <div class="location col-12 col-lg-3 pt-1 large text-lg-end">
            <p class="mb-1">Mountain View</p>
            <p class="mb-1">California, United States</p>
            <p class="mb-1">Tel: +1 123-456-7890</p>
            <p class="mb-0"><a class="text-decoration-none text-secondary" href="">hello@yourdomain.com</a></p>
          </div>
        </div>
        <div class="border-top d-lg-none"></div>
        <div class="d-lg-flex justify-content-between py-3">
          <div class="large">
            <span class="d-block d-lg-inline mb-2 mb-lg-0 me-lg-5">© 2024 pvictordev. All rights reserved.</span> <a class="text-secondary d-block d-lg-inline mb-2 mb-lg-0 me-lg-5" href="">Privacy Policy</a> <a class="d-block d-lg-inline text-secondary mb-2 mb-lg-0 me-lg-5" href="">Terms of Service</a>
          </div>
          <div class="large">
            <span class="text-right">Built with Bootstrap</span>
          </div>
        </div>
      </div>
    </footer>
              `;
  }
}
customElements.define("custom-footer", CustomFooter);

// navbar actions
document.addEventListener("DOMContentLoaded", function () {
  // create and insert hetader and footer
  const header = new CustomHeader();
  const footer = new CustomFooter();

  const body = document.querySelector("body");

  body.insertBefore(header, body.firstChild);

  body.appendChild(footer);
});
