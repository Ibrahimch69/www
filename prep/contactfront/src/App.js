import react from 'react';
import{Routes, Route , BrowserRouter} from 'react-router-dom';
import CreateProduct from './page/Create.component';
import 'bootstrap/dist/css/bootstrap.css';
import List from './page/List.component';
import EditProduct from './page/Edit.component';


function App() {
  return (
    <div className="App">
     <BrowserRouter>
     <Routes>
      <Route path="/" element={<List />} />
      <Route path="/create" element={<CreateProduct />} />
      <Route path ="/Edit/" element={<EditProduct />} />
     </Routes>
     </BrowserRouter>
    </div>
  );
}

export default App;
