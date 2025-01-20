<style>
/*department animation*/
::-webkit-scrollbar {
    width: 15px;
  }
  
  ::-webkit-scrollbar-track {
    box-shadow: inset 0 0 5px rgb(6, 170, 129); 
    border-radius: 10px;
  }
   
  ::-webkit-scrollbar-thumb {
    background: rgb(211, 210, 173); 
    border-radius: 10px;
  }
  
  ::-webkit-scrollbar-thumb:hover {
    background:rgb(9, 94, 61); 
  }
  
  .department {
      overflow: scroll;
      background-color:rgb(75, 119, 82);
      color:rgb(204, 203, 168);
      display: grid;
      grid-template-columns: auto auto auto auto auto;
      grid-gap: 5%;
      padding: 20px;
      border-radius: 10px;
      border: solid 2px rgb(9, 94, 61);
      transform: translateY(-150px);
      height: 62%;
      width: 100%;
      align-items: center;
      
  }

/*department logo*/
  .logos {
      background-color: transparent;
      border: none;
      transform: translateY(-0px);
      position: relative;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      gap: 20px;
  }    
  
  .logos:hover {
      transform: scale(1.1);
      transition: all 0.3s ease-in-out;
  }
  .logos img {
          border-radius: 50%;
          }
  .logo-text {
      transform: translateY(10px);
      font-size: 20px;
      text-align: center;
  }
/*reset*/
  .Reset {
      margin-left: 40%;
      align-items: center;
      width: 20%;
      transform: translateY(-140px);
      background-color:rgb(91, 147, 101);
      color:rgb(3, 3, 3);
      text-align: center;
      border: solid 2px rgb(65, 104, 72);
      padding: 12px;
      text-decoration: none;
      font-size: 20px;
      border-radius: 0.9vw;
  }
  </style>