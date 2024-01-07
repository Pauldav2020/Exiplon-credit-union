let firstCarousel = document.querySelector('.carosel-items')
const toggleClose = document.querySelector('.close')
const trigger = document.querySelector('ul.list');


toggleClose.addEventListener('click', () =>{
    toggleClose.classList.toggle('active')
    document.querySelector('.navbar').classList.toggle('active')
    document.querySelector('.navigation').classList.toggle('active')
    document.querySelector('body').classList.toggle('stop-scroll')

})


const carouseArray = [
    {
        content: `
            <h4>360 PERFORMANCE SAVINGS</h4>
            <h3>Open a high-yield savings account</h3>
            <p>Have a happier new year with one of the best savings rates in America</p>
            <a href="#" class="fake">Take a look</a>
        `,
        imgUrl: 'cap-asset/img/girlphone.avif'
    },
    {
        content: `
            <h4>CERTIFICATE OF DEPOSIT</h4>
            <h3>Guaranteed returns & a fixed rate</h3>
            <p>Chose your 360 CD term length and open an account-no minimum required</p>
            <a href="#">View details</a>
        `,
        imgUrl: 'cap-asset/img/family.jpg'
    },
    {
        content: `
            <h4>SEE IF YOU'RE PRE-APPROVED</h4>
            <h3>Your credit score is worth protecting</h3>
            <p>See What cards your're eligible for with no impact to your credit score</p>
            <a href="#">Continue</a>
        `,
        imgUrl: 'cap-asset/img/cards.avif'
    },
    
    {
        content: `
            <h4>SPECIAL RATE</h4>
            <h3>5.00% APY with an 11-month 460 CD</h3>
            <p>Get guaranteed returns with no minimum deposit. Lock in  by...</p>
            <a href="#">View details</a>
        `,
        imgUrl: 'cap-asset/img/ice.avif'
    },
    {
        content: `
            <h4>360 PERFORMANCE SAVINGS</h4>
            <h3>Open a high-yield savings account</h3>
            <p>Have a happier new year with one of the best savings rates in America</p>
            <a href="#">Take a look</a>
        `,
        imgUrl: 'cap-asset/img/happyman.avif'
    },
    
]
let moves = 0;
const nextMove =()=>{
    if(moves < carouseArray.length -1){
        moves += 1;
        firstCarousel.style.backgroundImage = `url(${carouseArray[moves].imgUrl})`
        firstCarousel.querySelector('.content').innerHTML = carouseArray[moves].content;
       
    }else{
        moves = 0;
        firstCarousel.style.backgroundImage = `url(${carouseArray[moves].imgUrl})`
        firstCarousel.querySelector('.content').innerHTML = carouseArray[moves].content;
        moves += 1;
    }
}

window.onload = function(){
    setInterval(() => {
        nextMove()
    }, 5000);
}


// tabs
trigger.addEventListener('click',(e)=>{
    if(e.target.tagName === "LI"){
       const content = e.target.querySelector('.content')
       content.classList.toggle('active');
       const plus = e.target.querySelector('.two');
       plus.classList.toggle('active')
    }
    
})

