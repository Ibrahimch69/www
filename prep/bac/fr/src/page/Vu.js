
import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import Button from 'react-bootstrap/Button'
import axios from 'axios';
import Swal from 'sweetalert2'
function Vu() {
    const [products, setProducts] = useState([])
    useEffect(()=>{
        fetchProducts() 
    },[])
    const fetchProducts = async () => {
        await axios.get(`http://localhost:8000/api/products`).then(({data})=>{
            setProducts(data)
        })
    }
  return (
    <div>
        
            <div className="col-12">
            
                    <div className="table-responsive">
                        <table className="table table-bordered mb-0 text-center">
                        
                            <tbody>
                                <div className='container'>
                                {
                                    products.length > 0 && (
                                        products.map((row, key)=>(
                                            <div class="row">
<div class="col-md-4 col-12 col-lg-3 mt-3">
<div class="card">
<p class="card-text">{row.image} €</p>
  <div class="card-body">
  <h5 class="card-title">{row.title }</h5>
  <p class="card-text">{row.description }</p>
    <a href="#" class="btn btn-primary">Voir</a>
    </div>
      </div> 
       </div> 
       </div>


                                          
                                         
                                        ))
                                    )
                                }</div>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
      
    
 
  )
}

export default Vu