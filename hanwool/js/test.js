import React, { useState } from 'react';


const [num, setNum] = useState([,., pu9i])

const Rsss = () => {
    return (
        <div onClick={() => setNum(2)} className={num === 2 && 'on'}>ddd</div>
    )
}

const test = () => {
    return (
        <div>
            {
                num === 2 && <Rsss />
            }

            {
                num.map((it, idx) => {
                    return (
                        <li>{it}</li>
                    )
                })
            }
        </div>
    )
}

export default test;


