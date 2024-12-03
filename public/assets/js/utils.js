// block button for after requests post

function btnWaitRequest(elementTextID, elementButtonID) {
    
    let button = document.getElementById(elementButtonID)
    let text = document.getElementById(elementTextID)
    
    if (text.value =! "") {
        button.classList.add('disabled')
        button.style.cursor = "not-allowed"
        button.innerHTML = `<div class="spinner-border m-1" role="status"><span class="visually-hidden"></span></div>`
    }    
}

// animation for success process

function confete() {

    tsParticles.load("tsparticles", {
        "fullScreen": {
            "zIndex": 1
        },
        "particles": {
            "number": {
            "value": 7
            },
            "color": {
            "value": [
                "#00FFFC",
                "#FC00FF",
                "#fffc00"
            ]
            },
            "shape": {
            "type": [
                "circle",
                "square",
                "triangle"
            ],
            "options": {}
            },
            "opacity": {
            "value": 1,
            "animation": {
                "enable": true,
                "minimumValue": 0,
                "speed": 2,
                "startValue": "max",
                "destroy": "min"
            }
            },
            "size": {
            "value": 4,
            "random": {
                "enable": true,
                "minimumValue": 2
            }
            },
            "links": {
            "enable": false
            },
            "life": {
            "duration": {
                "sync": true,
                "value": 5
            },
            "count": 1
            },
            "move": {
            "enable": true,
            "gravity": {
                "enable": true,
                "acceleration": 10
            },
            "speed": {
                "min": 10,
                "max": 20
            },
            "decay": 0.1,
            "direction": "none",
            "straight": false,
            "outModes": {
                "default": "destroy",
                "top": "none"
            }
            },
            "rotate": {
            "value": {
                "min": 0,
                "max": 360
            },
            "direction": "random",
            "move": true,
            "animation": {
                "enable": true,
                "speed": 60
            }
            },
            "tilt": {
            "direction": "random",
            "enable": true,
            "move": true,
            "value": {
                "min": 0,
                "max": 360
            },
            "animation": {
                "enable": true,
                "speed": 60
            }
            },
            "roll": {
            "darken": {
                "enable": true,
                "value": 25
            },
            "enable": true,
            "speed": {
                "min": 15,
                "max": 25
            }
            },
            "wobble": {
            "distance": 30,
            "enable": true,
            "move": true,
            "speed": {
                "min": -15,
                "max": 15
            }
            }
        },
        "emitters": {
            "life": {
            "count": 1,
            "duration": 0.1,
            "delay": 0.4
            },
            "rate": {
            "delay": 0.1,
            "quantity": 150
            },
            "size": {
            "width": 0,
            "height": 0
            }
        }
    })

}