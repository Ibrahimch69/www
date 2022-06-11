import * as React from "react";
import Navbar from "react-bootstrap/Navbar";
import Container from "react-bootstrap/Container";
import Row from "react-bootstrap/Row";
import Col from "react-bootstrap/Col";
import "bootstrap/dist/css/bootstrap.css";

import { BrowserRouter as Router , Routes, Route, Link } from "react-router-dom";

import EditProduct from "./page/Edit.component";
import ProductList from "./page/List.component";
import CreateProduct from "./page/Create.component";
import Vu from "./page/Vu";

function App() {
  return (<Router>
 
      <Container>
        <Link to={"/"} className="navbar-brand text-white">
          Basic Crud App
        </Link>
      </Container>


    <Container className="mt-5">
      <Row>
        <Col md={12}>
          <Routes>
            <Route path="/product/create" element={<CreateProduct />} />
            <Route path="/product/edit/:id" element={<EditProduct />} />
            <Route exact path='/' element={<ProductList />} />
            <Route path="/vu" element={<Vu />} />
          </Routes>
        </Col>
      </Row>
    </Container>
  </Router>);
}

export default App;
