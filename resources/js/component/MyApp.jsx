import {React  , useEffect, useState} from 'react';
import axios from 'axios';
function MyApp() {
    const [client , setClient] = useState([])
    const [clientId , setClientId] = useState()
    //------------------------------------------
    const [article, setArticle] = useState([])
    const [articleId, setArticleId] = useState()
    //------------------------------------------
    const [modePaiement , setModePaimaent] = useState()
    const [payment , setPayment] = useState([])
    const [AllProduct , setAllProduct] = useState([])
    const getclient = () =>{
        axios.get("http://127.0.0.1:8000/api/getclient")
      .then(item => {
          setClient(item.data.clients)
      })
    }
    const getarticle = () =>{
        axios.get("http://127.0.0.1:8000/api/getarticle")
      .then(item => {
        setArticle(item.data.articles)
      })
    }
    const getpayment = () =>{
        axios.get("http://127.0.0.1:8000/api/getpayment")
        .then(item => {
            setPayment(item.data.modePayyment)
      })
    }
  
    useEffect(() => {
        getclient()
        getarticle()
        getpayment()
      }, [])
      function AddArticle(e){
        e.preventDefault()
        const FindItem = article.find(x => x.id === Number(articleId))
        console.log(FindItem)
        if(FindItem){
            FindItem.qte = 1
            FindItem.datec = "salam"
        }
      }
    return (
        <div className="col-12">
        <div className="card mb-4 w-95">
            <div className="card-header pb-0 d-flex justify-content-between">
                {/* <h6>La Caisse</h6>  */}
                <div className="row float-end">
                    <div className="col-md-4">
                        <div className="form-group">
                            <label htmlFor="article_id" className="form-control-label">Article</label>
                            <select className="form-control" type="text" name="article_id" id="article_id" onChange={e=>setArticleId(e.target.value)}>
                            <option>----Choiser Votre Client----</option>
                            {
                                article?.map(item=>(
                                    <option value={item.id} key={item.id}>{item.nomcommercial}</option>
                                ))
                            }
                            </select>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="form-group">
                            <label htmlFor="client_id" className="form-control-label">Client</label>
                            <select className="form-control" type="text" name="client_id" id="client_id" onChange={e=>setClientId(e.target.value)}>
                            <option>----Choiser Votre Client----</option>
                            {
                                client?.map(item=>(
                                    <option value={item.id} key={item.id}>{item.nomcomplete}</option>
                                ))
                            }
                            </select>
                        </div>
                    </div>
                    <div className="col-md-4">
                        <div className="form-group">
                            <label htmlFor="client_id" className="form-control-label">Mode Paiement</label>
                            <select className="form-control" type="text" name="client_id" id="client_id" onChange={e=>setModePaimaent(e.target.value)}>
                            <option>----Choiser Votre Client----</option>
                            {
                                payment?.map(item=>(
                                    <option value={item.id} key={item.id}>{item.modepaiement}</option>
                                ))
                            }
                            </select>
                        </div>
                    </div>
                </div>
                <div className="col mt-4">
                    <div className="form-group">
                        <button type="button" className="btn btn-success fa fa-plus ms-5 py-2 px-3" onClick={AddArticle}></button>
                    </div>
                </div>
            </div>
            <div className="card-body px-0 pt-0 pb-2">
                <div className="table-responsive p-0">
                    <div className="table-wrapper-scroll-y my-custom-scrollbar">
                    <table className="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th
                                        className="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        #</th>
                                    <th
                                        className="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Date de bon de commande</th>
                                    <th
                                        className="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Client</th>
                                    <th
                                        className="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Article</th>
                                    <th
                                        className="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Longueur</th>
                                    <th
                                        className="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Largeur</th>
                                    <th
                                        className="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Quantité</th>

                                    <th
                                        className="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Pourcentage du chute</th>
                                    <th
                                        className="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Surface</th>
                                    <th
                                        className="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Unité</th>

                                    <th
                                        className="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Prix</th>
                                    <th
                                        className="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Total</th>

                                    <th
                                        className="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Avance</th>
                                    <th
                                        className="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Mode de paiement</th>
                                    <th
                                        className="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Date d'écheance</th>
                                    <th
                                        className="text-uppercase text-secondary text-center text-xxs font-weight-bolder opacity-7">
                                        Action</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                            
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    );
}
export default MyApp;