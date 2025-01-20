<style>
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
/*generate report css*/
.btn-generate {
    border: solid 2px rgb(9, 94, 61);
    float: right;
    display: block;
    width: 100%;
    padding: 10px;
    background-color:rgb(91, 147, 101);
    color: rgb(41, 41, 41);
    text-align: center;
    font-size: 20px;
    border-radius: 5px;
    text-decoration: none;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease-in-out;
  }

  .btn-generate:hover {
    transform: scale(1.1);
    transform: translateY(-5px);    
    transition: all 0.3s ease-in-out;
    
  }

  .back1 {
    transform: translateY(680%);
    background-color:rgb(91, 147, 101);
    color: #151816;
    text-align: center;
    border: solid 3px rgb(9, 94, 61);
    padding: 12px;
    margin-right: 29%;
    float: right;
    text-decoration: none;
    font-size: 1.3vw;
    border-radius: 0.9vw;
    width: 250px;
    transition: all 0.3s ease-in-out;
    }

.back1:hover {
    transform: scale(1.1);
    transform: translateY(660%);    
    transition: all 0.3s ease-in-out;
} 

 /*progress css*/ 
.progress-bar1 {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }

  .progress-bar1 span {
    color: rgb(204, 203, 168);
    margin-left: 10px;
    font-weight: bold;
    font-size: 30px;
  }

  .progress1 {
    border: solid 2px rgb(9, 94, 61);
    flex-grow: 1;
    background-color: #e0e0e0;
    border-radius: 10px;
    overflow: hidden;
  }

  .progress div {
    width: 0%; /* Adjust this value to set progress */
    height: 100%;
    background-color: #4CAF50;
  }

 /*table css*/ 
 .container2 {
    transform: translateY(8%);
    margin-left: 0px;
    height: 69%;
    width: 100%;
    background-color:rgb(55, 88, 61);
    border: solid 2px rgb(0, 0, 0);
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .table2 {
    font-weight: bold;
    background-color:rgb(224, 224, 197);
    border: solid 2px rgb(0, 0, 0);
    width: 100%;
    height: 85%;
    border-collapse: collapse;
    text-align: left;
    border-radius: 10px;

  }

 .table1 {
    overflow: scroll;
    font-weight: bold;
    background-color:rgb(224, 224, 197);
    border: solid 2px rgb(0, 0, 0);
    transform: translateY(-46%);
    width: 100%;
    height: 50%;
    border-collapse: collapse;
    text-align: left;
    margin-left: 0px;
    border-radius: 10px;
  }

  th, td {
    text-align: center;
    padding: 12px;
    border: solid 2px rgb(0, 0, 0);
  }

  th {
    border-radius: 10px;
    border: solid 2px rgb(0, 0, 0);
    background-color:rgb(221, 220, 175);
    color: rgb(0, 0, 0);
  }
</style>