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
    const [Datec , setDateC] = useState()
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
        // console.log(FindItem)
        if(FindItem){
            FindItem.qte = 1
            FindItem.datec = Datec
            FindItem.longueur = "longuer"
            FindItem.largeur = "largeur"
            FindItem.avance = "avance"
            FindItem.dateecheance = "dateecheance"
            FindItem.mode_paiement_id  = modePaiement
            FindItem.article_id = articleId
            FindItem.client_id =  clientId
            const data = [...AllProduct, FindItem]
            setAllProduct(data)
            console.log(AllProduct)
        }
      }
      const increment = (item) => {
        item.qte += 1
        setAllProduct([...AllProduct])
      }
      const decrement = (item) => {
        item.qte -= 1
        if (item.qte === 0) {
          item.qte = 1
          setAllProduct([...AllProduct])
        } else {
    
          setAllProduct([...AllProduct])
        }
      }
    return (
        <>
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
                <div className="col-md-3 ms-3">
                    <div className="form-group">
                    <label  className="form-control-label">Date de Bon de Commande</label>
                    <input className="form-control w-50" type="date" onChange={e=>setDateC(e.target.value)}/>
                    </div>
                </div>
                <div className="col-md-3 mt-3">
                    <div className="form-group">
                    <label  className="form-control-label"></label>
                        <button type="button" className="btn btn-success fa fa-plus ms-5 py-2 px-3" onClick={AddArticle}></button>
                    </div>
                </div>
            </div>
            <div className="card-body px-0 pt-0 pb-2">
                <div className="table-responsive p-0">
                    <div className="table-wrapper-scroll-y my-custom-scrollbar" style={{height:"400px",overflow:"scroll"}}>
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
                            {
                                AllProduct?.map((item,index)=>(
                                      <tr key={index+1}>
                                        <td className="text-center">
                                            <h6 className="mb-0 text-lg">{ index+1}</h6>
                                        </td>
                                        <td className="align-middle text-center">
                                            <p className="text-xs font-weight-bold mb-0">{item.datec}</p>
                                        </td>
                                        <td className="align-middle text-center">
                                            <p className="text-xs font-weight-bold mb-0">{ item.client_id}</p>
                                        </td>
                                        <td className="align-middle text-center">
                                            <span
                                                className="text-xs font-weight-bold">{ item.nomcommercial }</span>
                                        </td>
                                        <td className="align-middle text-center">

                                            <span className="text-xs font-weight-bold">{ item.longueur }</span>
                                        </td>
                                        <td className="align-middle text-center">

                                            <span className="text-xs font-weight-bold">{ item.largeur }</span>
                                        </td>
                                        <td className="align-middle text-center">

                                            <span className="text-xs font-weight-bold d-flex justify-content-between"><i style={{ cursor: "pointer" }} className="fa fa-angle-down" onClick={() => { decrement(item) }}></i><h6>{item.qte}</h6><i style={{ cursor: "pointer" }} className="fa fa-angle-up" onClick={() => { increment(item) }}></i></span>
                                        </td>
                                        <td className="align-middle text-center">
                                            <span className="text-xs font-weight-bold"></span>
                                        </td>
                                        <td className="align-middle text-center">
                                            <span className="text-xs font-weight-bold">{ item.unite }</span>
                                        </td>
                                        <td className="align-middle text-center">
                                            <span className="text-xs font-weight-bold">{ item.prix }</span>
                                        </td>
                                        <td className="align-middle text-center">
                                            <span className="text-xs font-weight-bold"></span>
                                        </td>
                                        <td className="align-middle text-center">
                                            <span
                                                className="text-xs font-weight-bold">{ item.avance}</span>
                                        </td>
                                        <td className="align-middle text-center">
                                            <span
                                                className="text-xs font-weight-bold">{ item.mode_paiement_id }</span>
                                        </td>
                                        <td className="align-middle text-center">
                                            <span className="text-xs font-weight-bold">{ item.dateecheance }</span>
                                            </td>
                                        <td className="align-middle text-center cursor-pointe">
                                            <button className='btn btn-danger'>Delete</button>
                                        </td>
                                    </tr>
                                ))
                            } 
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>                   
    </>
    );
}
export default MyApp;