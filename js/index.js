// 1. Select our audio tag
document.querySelector('audio')
    // 2. Attach our event listener
    .addEventListener('play', () => {
        document.title = "Playing: DJ Stuiter - Machine, Pt. 2";
    })
// 1. Select our audio tag
document.querySelector('audio')
    // 2. Attach our event listener
    .addEventListener('ended', () => {
        document.title = "Retiu's dumb site :3";
    })
// 1. Select our audio tag
document.querySelector('audio')
    // 2. Attach our event listener
    .addEventListener('pause', () => {
        document.title = "Retiu's dumb site :3";
    })

