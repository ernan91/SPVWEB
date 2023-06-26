<video id="background-video" autoplay loop muted>

<source src="https://assets.codepen.io/6093409/river.mp4" type="video/mp4">

</video>

 

<div class="content">

<h1>BIEN PLUS QU'UNE RIVIÈRE</h1>

<h2>Une source de vie</h2>

<button id="btnVideo" onclick="playAndPause()">Pause II</button>

</div>

<style>
    #background-video {
height: 100vh;
width: 100vw;
object-fit: cover;
position: fixed;
left: 0;
right: 0;
top: 0;
bottom: 0;
z-index: -1;
}

h1, h2, #btnVideo{

color: white;

font-family: Trebuchet MS;

font-weight: bold;

text-align: center;

}

h1 {
font-size: 6rem;
margin-top: 30vh;
}

h2 { font-size: 3rem; }

#btnVideo{
font-size: 1.5rem;
background: 0;
border: 0;
margin-left: 50%;
transform: translateX(-50%);
}
    </style>