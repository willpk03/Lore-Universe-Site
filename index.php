<!DOCTYPE html>
<html>
    <head>
        <title>Will - Homepage</title>
        <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
        <style>
            @import url("https://fonts.googleapis.com/css2?family=Ubuntu+Mono&display=swap");
                * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                }

                body {
                min-height: 75vh;
                display: grid;
                place-items: center;
                background: #1C558E;
                font-family: "Ubuntu Mono", monospace;
                font-weight: 400;
                }

                .container {
                width: 100%;
                display: flex;
                justify-content: center;
                height: 500px;
                gap: 20px;

                > div {
                    flex: 0 0 120px;
                    border-radius: 0.5rem;
                    transition: 0.5s ease-in-out;
                    cursor: pointer;
                    box-shadow: 1px 5px 15px #1e0e3e;
                    position: relative;
                    overflow: hidden;

                    &:nth-of-type(1) {
                    background: url("timeline.png")
                        no-repeat 50% / cover;
                    }
                    &:nth-of-type(2) {
                    background: url("maincharacters.jpg")
                        no-repeat 50% / cover;
                    }
                    &:nth-of-type(3) {
                    background: url("newstory.png")
                        no-repeat 50% / cover;
                    }
                    &:nth-of-type(4) {
                    background: url("https://images.pexels.com/photos/247322/pexels-photo-247322.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260")
                        no-repeat 50% / cover;
                    }

                    .content {
                    font-size: 1.5rem;
                    color: #fff;
                    display: flex;
                    align-items: center;
                    padding: 15px;
                    opacity: 0;
                    flex-direction: column;
                    height: 100%;
                    justify-content: flex-end;
                    background: rgb(2, 2, 46);
                    background: linear-gradient(
                        0deg,
                        rgba(2, 2, 46, 0.6755077030812324) 50%,
                        rgba(255, 255, 255, 0) 100%
                    );
                    transform: translatey(100%);
                    transition: opacity 0.5s ease-in-out, transform 0.5s 0.2s;
                    visibility: hidden;

                    span {
                        display: block;
                        margin-top: 5px;
                        font-size: 1.2rem;
                    }
                    }

                    &:hover {
                    flex: 0 0 250px;
                    box-shadow: 1px 3px 15px #7645d8;
                    transform: translatey(-30px);
                    }

                    &:hover .content {
                    opacity: 1;
                    transform: translatey(0%);
                    visibility: visible;
                    }
                }
                }

                body {
  padding: 0;
  margin: 0;
  width: 100vw;
  height: 100vh;
  position: relative;
  overflow: hidden;
  background: linear-gradient(#123, #111);
}

.snowflake {
  --size: 1vw;
  width: var(--size);
  height: var(--size);
  background: white;
  border-radius: 50%;
  position: absolute;
  top: -5vh;
}

@keyframes snowfall {
  0% {
    transform: translate3d(var(--left-ini), 0, 0);
  }
  100% {
    transform: translate3d(var(--left-end), 110vh, 0);
  }
}

@for $i from 1 through 50 {
  .snowflake:nth-child(#{$i}) {
    --size: #{random(5) * 0.2}vw;
    --left-ini: #{random(20) - 10}vw;
    --left-end: #{random(20) - 10}vw;
    left: #{random(100)}vw;
    animation: snowfall #{5 + random(10)}s linear infinite;
    animation-delay: -#{random(10)}s;
  }
}

/* added small blur every 6 snowflakes*/
.snowflake:nth-child(6n) {
  filter: blur(1px);
}



        </style>
    </head>
    <header>
         <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="javascript:void(0)">Logo</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Universe Timeline
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">The Complete Timeline</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">The Crystal Timeline (Original Timeline)</a></li>
                        <li><a class="dropdown-item" href="#">The Reset Timeline (#1 Reset)</a></li>
                        <li><a class="dropdown-item" href="#">2nd attempt Timeline (#2 Reset)</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Character Profiles</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Stories</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0)">Worlds</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-primary" type="button">Search</button>
                </form>
                </div>
            </div>
            </nav>   
    </header>
        <body>
        <div class="container">
            <div>
                <div class="content">
                <h2>The Full Timeline</h2>
                <span>Understand from the creation of the first Crystals to Isotopia</span>
                </div>
            </div>
            <div>
                <div class="content">
                <h2>The Main Characters</h2>
                <span>The one page to get started on when understanding the different characters in this world</span>
                </div>
            </div>
            <div>
                <div class="content">
                <h2>Newest Story</h2>
                <span>Read the newest released stories</span>
                </div>
            </div>
        </div>
        </body>
</html>