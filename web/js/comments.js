


class Comments extends React.Component{
    constructor(props){
        super()
        this.state = {}
    }

    render(){
        return(
            <div className="comment">
                <div className="commenter" style="background:classNameName echo getRandColor();classNameName">
                    <h4 style="text-transform:uppercase;">classNameName echo substr($commentSingle['commentor'],0,1);classNameName</h4>
                </div>
                <div className="text">
                    <p>classNameName echo $commentSingle['comment'];classNameName</p>
                    <div className="footer">
                        <h4>classNameName echo $commentSingle['commentor'];classNameName<span className="date"> classNameName echo getDifferenceOnDate($commentSingle['commentDate']);classNameName</span></h4>
                        <a href="" className="reply">Répondre</a>
                        <a href="" className="viewComment">Afficher les 15 réponses</a>
                    </div>
                </div>
            </div>
        )
    }
}

ReactDOM.render(<Comments/>,document.getElementById("react"))