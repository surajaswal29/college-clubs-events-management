'use strict';

// const images = document.querySelector('#dog-img');
const mainDiv = document.querySelector('#main');
// console.log(images);

const breakingBadAPI = () => {
  fetch('https://api.breakingbadquotes.xyz/v1/quotes')
    .then(success => {
      return success.json();
    })
    .then(data => {
      console.log(data);
    })
    .catch(err => {
      console.log(err);
    });
};

// breakingBadAPI();

const createImage = value => {
  for (let i = 0; i < value.length; i++) {
    const imageElement = document.createElement('img');
    main.appendChild(imageElement);
    imageElement.setAttribute('src', value[i]);
  }
};

const shibeAPI = count => {
  fetch(
    `http://shibe.online/api/shibes?count=${count}&urls=true&httpsUrls=true`
  )
    .then(response => {
      return response.json();
    })
    .then(data => {
      console.log(data);
      if (data) {
        createImage(data);
      }
    });
};

shibeAPI(20);
