async function  getBilgi() {
    const ch = await fetch("https://www.breakingbadapi.com/api/characters");
    const bilgiler = await ch.json();

    console.log(bilgiler);

    document.querySelector("#foto1").src = bilgiler[4].img;
}
getBilgi();