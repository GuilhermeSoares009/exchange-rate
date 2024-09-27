import React, { useEffect, useState } from 'react';
import axios from 'axios';

const ExchangeRate = () => {

    const [currentRate, setCurrentRate] = useState(null); // Estado para armazenar o valor do câmbio 
    const [historicalRate, sethistoricalRate] = useState(null); // Estado para armazenar o valor do histórico
    const [loading, setLoading] = useState(true);

    const fetchCurrentRate = async () => {
        try {
            const response = await axios.get('http://127.0.0.1:8000/api/exchange-rate/show-current-rate');
            setCurrentRate(response.data);
        } catch (error) {
            console.error('Erro aos buscar a taxa atual:',error);
        }
    }

    const fetchHistoricalRate = async () => {
        try {
            const response = await axios.get('http://127.0.0.1:8000/api/exchange-rate/show-historical-rate');
            sethistoricalRate(response.data);
        } catch (error) {
            console.error('Erro aos buscar a taxa histórica atual:',error);
        }
    }

    useEffect(() => {

        const fetchData = async () => {
            await fetchCurrentRate();
            await fetchHistoricalRate();
        };
        fetchData();
    },[]);

    return (
        <div>
            <h1>Taxa de Câmbio</h1>
            <h2>Taxa Atual</h2>
            <pre>{JSON.stringify(currentRate, null, 2)}</pre>
        </div>
    );

};

export default ExchangeRate;

