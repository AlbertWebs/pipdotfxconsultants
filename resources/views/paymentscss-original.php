<style>
    * {
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", sans-serif;
    }
    #w3lDemoBar.w3l-demo-bar {
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 9999;
    padding: 40px 5px;
    padding-top:70px;
    margin-bottom: 70px;
    background: #0D1326;
    border-top-left-radius: 9px;
    border-bottom-left-radius: 9px;
    }
    #w3lDemoBar.w3l-demo-bar a {
    display: block;
    color: #e6ebff;
    text-decoration: none;
    line-height: 24px;
    opacity: .6;
    margin-bottom: 20px;
    text-align: center;
    }
    #w3lDemoBar.w3l-demo-bar span.w3l-icon {
    display: block;
    }
    #w3lDemoBar.w3l-demo-bar a:hover {
    opacity: 1;
    }
    #w3lDemoBar.w3l-demo-bar .w3l-icon svg {
    color: #e6ebff;
    }
    #w3lDemoBar.w3l-demo-bar .responsive-icons {
    margin-top: 30px;
    border-top: 1px solid #41414d;
    padding-top: 40px;
    }
    #w3lDemoBar.w3l-demo-bar .demo-btns {
    border-top: 1px solid #41414d;
    padding-top: 30px;
    }
    #w3lDemoBar.w3l-demo-bar .responsive-icons a span.fa {
    font-size: 26px;
    }
    #w3lDemoBar.w3l-demo-bar .no-margin-bottom{
    margin-bottom:0;
    }
    .toggle-right-sidebar span {
    background: #0D1326;
    width: 50px;
    height: 50px;
    line-height: 50px;
    text-align: center;
    color: #e6ebff;
    border-radius: 50px;
    font-size: 26px;
    cursor: pointer;
    opacity: .5;
    }
    .pull-right {
    float: right;
    position: fixed;
    right: 0px;
    top: 70px;
    width: 90px;
    z-index: 99999;
    text-align: center;
    }
    /* ============================================================
    RIGHT SIDEBAR SECTION
    ============================================================ */
    #right-sidebar {
    width: 90px;
    position: fixed;
    height: 100%;
    z-index: 1000;
    right: 0px;
    top: 0;
    margin-top: 60px;
    -webkit-transition: all .5s ease-in-out;
    -moz-transition: all .5s ease-in-out;
    -o-transition: all .5s ease-in-out;
    transition: all .5s ease-in-out;
    overflow-y: auto;
    }
    /* ============================================================
    RIGHT SIDEBAR TOGGLE SECTION
    ============================================================ */
    .hide-right-bar-notifications {
    margin-right: -300px !important;
    -webkit-transition: all .3s ease-in-out;
    -moz-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
    }
    @media (max-width: 992px) {
    #w3lDemoBar.w3l-demo-bar a.desktop-mode{
    display: none;
    }
    }
    @media (max-width: 767px) {
    #w3lDemoBar.w3l-demo-bar a.tablet-mode{
    display: none;
    }
    }
    @media (max-width: 568px) {
    #w3lDemoBar.w3l-demo-bar a.mobile-mode{
    display: none;
    }
    #w3lDemoBar.w3l-demo-bar .responsive-icons {
    margin-top: 0px;
    border-top: none;
    padding-top: 0px;
    }
    #right-sidebar,.pull-right {
    width: 90px;
    }
    #w3lDemoBar.w3l-demo-bar .no-margin-bottom-mobile{
    margin-bottom: 0;
    }
    }

video {
  object-fit: cover;
  width: 100vw;
  height: 100vh;
  position: fixed;
  top: 0;
  left: 0;
  z-index: -1;
}

html, body {
  height: 100%;
}


.viewport-header {
  position: relative;
  height: 100%;
  text-align: center;
  display: flex;
  align-items: center;
  justify-content: center;
}


main {
  background: rgba(black, 0.66);
  color: white;
  position: relative;
  padding: 1rem;
  p {
    max-width: 600px;
    margin: 1rem auto;
  }
}

 </style>