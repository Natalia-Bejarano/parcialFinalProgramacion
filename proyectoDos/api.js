fetch(' https://jsonplaceholder.typicode.com/comments') 
      .then(response => {
       
        if (!response.ok) {
          throw new Error(`ERROR: ${response.status}`); 
        }
        return response.json(); 
      })
      .then(data => {
      
        console.log(data);
      })
      .catch(error => {
    
        console.error('ERROR, SEÑOR USER', error);
      });