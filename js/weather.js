const apiKey = "3b06c826faa6e1f8ff0d360bc504a974";
const apiURLbishkek = "https://api.openweathermap.org/data/2.5/weather?units=metric&q=bishkek";
const apiURLosh = "https://api.openweathermap.org/data/2.5/weather?units=metric&q=osh";
const lang = "ru"


async function checkWeatherBishkek() {
    const response = await fetch(apiURLbishkek + `&appid=${apiKey}` + `&lang=ru`);
    var data = await response.json();

    // console.log(data);

    document.querySelector(".weather.bishkek h4").innerHTML = data.name;
    document.querySelector(".weather.bishkek .weather__desc").innerHTML = data.weather[0].description;
    document.querySelector(".weather.bishkek .weather__temp").innerHTML = Math.round(data.main.temp) + "°C";
    document.querySelector(".weather.bishkek .weather__humidity").innerHTML = data.main.humidity + "%";
    document.querySelector(".weather.bishkek .weather__wind").innerHTML = data.wind.speed + "км/ч";

}

checkWeatherBishkek();



async function checkWeatherOsh() {
    const response = await fetch(apiURLosh + `&appid=${apiKey}` + `&lang=ru`);
    var data = await response.json();

    // console.log(data);


    document.querySelector(".weather.osh h4").innerHTML = data.name;
    document.querySelector(".weather.osh .weather__desc").innerHTML = data.weather[0].description;
    document.querySelector(".weather.osh .weather__temp").innerHTML = Math.round(data.main.temp) + "°C";
    document.querySelector(".weather.osh .weather__humidity").innerHTML = data.main.humidity + "%";
    document.querySelector(".weather.osh .weather__wind").innerHTML = data.wind.speed + "км/ч";


}

checkWeatherOsh();