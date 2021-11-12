function sel_theme(value){
    if (value=="black"){
        document.body.style.backgroundColor = value;
        document.body.style.color = "white"
    }
    else{
        document.body.style.backgroundColor = value;
        document.body.style.color = "black"
    }
}

function sel_state(value){
    switch(value){
        case "def" :
            document.getElementById("result").innerHTML = "Kamu hidup dalam kenyataan dan kamu tidak puas."
        break;
        case "puas" :
            document.getElementById("result").innerHTML = "Kamu berharap agar kamu " + value + ", Sekarang kamu puas akan kehidupan kamu."
        break;
        case "kaya" :
            document.getElementById("result").innerHTML = "Kamu berharap agar kamu " + value + ", Hidup itu tidak adil jadi kamu ragu doamu akan dikabulkan."
        break;
        case "ganteng" :
            document.getElementById("result").innerHTML = "Kamu berharap agar kamu" + value + ", Hidup itu tidak adil jadi kamu ragu doamu akan dikabulkan."
        break;
        case "waifu" :
            document.getElementById("result").innerHTML = "Kamu berharap agar kamu dapat " + value + ", Kamu mendengar suara petir yang kuat dan setelah beberapa lama kamu mengengar suara yang mengatakan 'awaokwakwkaoko ngimpi'."
        break;
    }
}

function inp_fact(value){
    var a = number
    for (let i = 1; i <a; i++) {
        number = number * (i)
    }
    document.getElementById("jawab").innerHTML = "Faktorialnya adalah " + number
}