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
    const [Longue ,  setLongueur] = useState(0)
    const [Largeur , setLargeur] = useState(0)
    const [avances,setAvances] = useState(0)
    const [dateecheance , setDateCheance] = useState()
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
        if(FindItem){
            FindItem.qte = 1
            FindItem.datec = Datec
            FindItem.longueur = 1
            FindItem.largeur = 1
            FindItem.avance = avances
            FindItem.dateecheance = dateecheance
            FindItem.mode_paiement_id  = modePaiement
            FindItem.article_id = articleId
            FindItem.client_id =  clientId
            const data = [...AllProduct, FindItem]
            setAllProduct(data)
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
        }else {
          setAllProduct([...AllProduct])
        }
      }
      const longuerChange = (item , e) =>{
        let start = 0
        start = e.target.selectionStart;
            let val = e.target.value;
            val = val.replace(/([^0-9.]+)/, "");
            val = val.replace(/^(0|\.)/, "");
            const match = /(\d{0,7})[^.]*((?:\.\d{0,2})?)/g.exec(val);
            const value = match[1] + match[2];
            setLongueur(parseFloat(value).toFixed(2));
            if (val.length > 0) {
                e.target.value = parseFloat(value).toFixed(2);
                e.target.setSelectionRange(start,start);
                setLongueur(parseFloat(value).toFixed(2));
                 item.longueur = parseFloat(Longue)
            setAllProduct([...AllProduct])
      }
    }
    const largeurChange = (item,e)=>{
        let start = 0
        start = e.target.selectionStart;
        let val = e.target.value;
        val = val.replace(/([^0-9.]+)/, "");
        val = val.replace(/^(0|\.)/, "");
        const match = /(\d{0,7})[^.]*((?:\.\d{0,2})?)/g.exec(val);
        const value = match[1] + match[2];
            setLargeur(parseFloat(value).toFixed(2));
        if (val.length > 0) {
            e.target.value = parseFloat(value).toFixed(2);
            e.target.setSelectionRange(start,start);
            setLargeur(parseFloat(value).toFixed(2));
            item.largeur = parseFloat(Largeur)
            setAllProduct([...AllProduct])
        }
}
    const DeleteFromCaisse = (nom) => {
    const DeleteArticle = AllProduct.filter(x => x.nomcommercial !== nom)
    setAllProduct(DeleteArticle)
    }
    const total = AllProduct.reduce(function (total, produit) {
        return total += (( produit.largeur * produit.longueur) * produit.prix * produit.qte) 
    }, 0)
    
    console.log(AllProduct)
      const InsertData = async (e) => {
        e.preventDefault()
        axios.post("http://127.0.0.1:8000/api/Caisse" , AllProduct)
         .then(Response=>{
                console.log(Response.data.status)
                if(Response.data.status === 200){
                    setAllProduct([])
                    // setPayment('')
                    // setArticle('')
                    // setClient('')
                    // setDateC('')
                    // setAvances('')
                    // setDateCheance('')
                }
            })
      }
    
    return (
    <>
    <div className="col-12">
    <div className="card mb-4 w-95">
        <div className="card-header pb-0 d-flex">
            {/* <h6>La Caisse</h6>  */}
            <div className="row float-start">
                <div className="col-md-4">
                    <div className="form-group">
                        <label htmlFor="article_id" className="form-control-label">Article</label>
                        <select className="form-control" type="text" name="article_id" id="article_id" onChange={e=>setArticleId(e.target.value)}>
                        <option>----Choiser Votre Article----</option>
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
                        <select className="form-control" type="text"  onChange={e=>setClientId(e.target.value)}>
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
                        <label htmlFor="payment" className="form-control-label">Mode Paiement</label>
                        <select className="form-control" type="text" name="payment" id="payment" onChange={e=>setModePaimaent(e.target.value)}>
                        <option>----Choiser Votre Paiment----</option>
                        {
                            payment?.map(item=>(
                                <option value={item.id} key={item.id}>{item.modepaiement}</option>
                            ))
                        }
                        </select>
                    </div>
                </div>
            </div>
            <div className="row mx-2">
            <div className="col-md-6">
                <div className="form-group">
                <label  className="form-control-label">Date de Bon de Commande</label>
                    <input className="form-control" type="date" onChange={e=>setDateC(e.target.value)}/>
                </div>
            </div>
            <div className="col-md-6">
                <div className="form-group">
                <label  className="form-control-label">Date Cheance</label>
                    <input className="form-control" type="date" id="datepicker" onChange={e=>setDateCheance(e.target.value)}/>
                </div>
            </div>
            </div>
            <div className="row">
            <div className="col-md-6">
                <div className="form-group">
                <label  className="form-control-label">Avances</label>
                    <input type="number" className="form-control" onChange={e=>{setAvances(e.target.value)}}/>
                </div>
            </div>
            <div className="col-md-6 mt-4">
                <div className="form-group">
                <label  className="form-control-label"></label>
                    <button type="button" className="btn btn-success fa fa-plus ms-5 py-2 px-3" onClick={AddArticle}></button>
                </div>
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
                        AllProduct && AllProduct.map((item,index)=>(
                                <tr key={index+1}>
                                <td className="text-center">
                                    <h6 className="mb-0 text-lg">{ index+1 }</h6>
                                </td>
                                <td className="align-middle text-center">
                                    <p className="text-xs font-weight-bold mb-0">{ item.datec }</p>
                                </td>
                                <td className="align-middle text-center">
                                    <p className="text-xs font-weight-bold mb-0">{ item.client_id }</p>
                                </td>
                                <td className="align-middle text-center">
                                    <span
                                        className="text-xs font-weight-bold">{ item.nomcommercial }</span>
                                </td>
                                <td className="align-middle">
                                    <span className="text-lg font-weight-bold d-flex justify-content-between">
                                        <div className="col-md-3 mt-3">
                                            <div className="form-group">
                                                <input type="text" className='form-group text-center'step={"any"} style={{width : "80px"}} onChange={(e)=>longuerChange(item , e)}
                                                 />
                                            </div>
                                        </div>
                                    </span>
                                </td>
                                <td className="align-middle">
                                    <span className="text-lg font-weight-bold d-flex justify-content-between">
                                        <div className="col-md-3 mt-3">
                                            <div className="form-group">
                                                <input type="text" className='form-group text-center' style={{width : "80px"}} onChange={(e)=>largeurChange(item , e)}
                                                 />
                                            </div>
                                        </div>
                                    </span>
                                </td>
                                <td className="align-middle text-center">
                                    <span className="text-xs font-weight-bold d-flex justify-content-between">
                                        <i style={{ cursor: "pointer" }} className="fa fa-angle-down" onClick={() => { decrement(item) }}></i><h6>{item.qte}</h6>
                                        <i style={{ cursor: "pointer" }} className="fa fa-angle-up" onClick={() => { increment(item) }}></i></span>
                                </td>
                                <td className="align-middle text-center">
                                    <span className="text-xs font-weight-bold">{(item.largeur * item.longueur).toFixed(2)}</span>
                                </td>
                                <td className="align-middle text-center">
                                    <span className="text-xs font-weight-bold">{ item.unite }</span>
                                </td>
                                <td className="align-middle text-center">
                                    <span className="text-xs font-weight-bold">{ item.prix }</span>
                                </td>
                                <td className="align-middle text-center text-danger">
                                    <span className="text-lg font-weight-bold">{(( item.largeur * item.longueur) * item.prix * item.qte).toFixed(2)} DH</span>
                                </td>
                                <td className="align-middle text-center">
                                <span className="text-lg font-weight-bold d-flex justify-content-between">
                                        <div className="col-md-3 mt-3">
                                            <div className="form-group text-center">
                                                <span className='mx-5'>
                                                    { avances ? avances : 0 } DH
                                                </span>
                                            </div>
                                        </div>
                                    </span>
                                </td>
                                <td className="align-middle text-center">
                                    <span
                                        className="text-xs font-weight-bold">{ item.mode_paiement_id }</span>
                                </td>
                                <td className="align-middle text-center">
                                    <span className="text-xs font-weight-bold">{ item.dateecheance }</span>
                                    </td>
                                <td className="align-middle text-center cursor-pointe">
                                    <button className='bg-transparent border-0 text-danger h4 bg bx bx-trash' onClick={() => DeleteFromCaisse(item.nomcommercial)}></button>
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
    <div className='col-md'>
        <div className='col-md float-end bg-transparent opacity-100 py-4'>
            <span className='text-dark text'>
                {(total * 1.10 - avances).toFixed(2)} DH
            </span>
        </div>
            <div className='col-md border border-white rounded float-end bg-danger py-4'>
                <span className='text-white text'>Total</span><br/>
            </div>
        </div>
    </div>   
    <div className='col-md mx-5'>
            <div className='col-md-6'>
                <button type="submit" className="btn btn-warning px-5 py-4 mx-0 my-3" onClick={InsertData}><span className='text-lg'>Valider</span></button>
            </div>
    </div>
                     
</>
    );
}
export default MyApp;