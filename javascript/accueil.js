

const text = document.querySelector('h2');

new Typewriter(text, {
    loop: true,
    autostart: true,
    deleteSpeed: 20,
})
.changeDelay(25)
.typeString('Je suis COULIBALY ZANA SIAKA')
.pauseFor(1000)
.typeString(', Developpeur Web' )
.pauseFor(1000)
.deleteChars(15)
.pauseFor(500)
.typeString(' Designer Web & mobile')
.pauseFor(1000)
.deleteChars(21)
.pauseFor(500)
.typeString(' Motion Designer')
.pauseFor(1000)
.deleteChars(15)
.pauseFor(500)
.typeString(' Designer Graphique')
.start()