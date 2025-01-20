<style>
*requirement css*/
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

.requirement {
    overflow: scroll;
    background-color:rgb(91, 147, 101);
    border-radius: 2%;
    border: solid 2px rgb(9, 94, 61);
    width: 39%;
    height: 70%;
    transform: translateY(7%);
}

.open-modal-btn {
    transform: translateY(20px);
    margin-left: 20px;
    display: block;
    width: 90%;
    padding: 10px;
    text-align: center;
    background-color:rgb(211, 210, 173);
    color: #000000;
    font-size: 20px;
    border: solid 2px rgb(9, 94, 61);
    border-radius: 10px;
    margin-bottom: 10px;
    text-decoration: none;
    font-weight: bold;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .open-modal-btn:hover {
    background-color: #4CAF50;
    color: white;
  }

.back {
    transform: translateY(35px);
    background-color: #149950;
    color: #151816;
    text-align: center;
    border: solid 3px rgb(9, 94, 61);
    padding: 12px;
    text-decoration: none;
    font-size: 1.3vw;
    border-radius: 0.9vw;
    width: 200px;
    }

.back:hover {
    transform: scale(1.1);
    transform: translateY(30px);    
    transition: all 0.3s ease-in-out;
} 

/*progress css*/ 
.progress-bar {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }

  .progress-bar span {
    margin-left: 10px;
    font-weight: bold;
    font-size: 30px;
  }

  .progress {
    border: solid 2px rgb(9, 94, 61);
    flex-grow: 1;
    height: 15px;
    background-color: #e0e0e0;
    border-radius: 10px;
    overflow: hidden;
    margin-right: 10px;
  }

  .progress div {
    width: 40%; /* Adjust this value to set progress */
    height: 100%;
    background-color:rgb(91, 147, 101);
  }
 /*table css*/ 

 .container1 {
    transform: translateY(-93%);
    float: right;
    height: 70%;
    width: 60%;
    background-color:rgb(211, 210, 173);
    border: solid 2px rgb(9, 94, 61);
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }


 table {
    font-weight: bold;
    background-color:rgb(91, 147, 101);
    border: solid 2px rgb(9, 94, 61);
    transform: translateY(10px);
    width: 100%;
    border-radius: 10px;
    border-collapse: collapse;
    text-align: left;
  }

  th, td {
    padding: 12px;
    border: 1px solid #ddd;
  }

  th {
    background-color:rgb(69, 114, 77);
    color: rgb(204, 203, 168);
  }
  </style>