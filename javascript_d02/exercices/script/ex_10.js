let acceptCookie = document.querySelector("footer div a");

acceptCookie.addEventListener('click', () => {
    let actualDate = new Date();

    actualDate.setDate( actualDate.getDate() + 1 );
    
    document.cookie = `acceptsCookies=true; expires=${actualDate};`
})