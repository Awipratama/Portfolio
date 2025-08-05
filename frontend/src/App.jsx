import { Routes, Route } from "react-router-dom";
import Login from "./pages/Login";
import MainLayout from "./pages/MainLayout";
import React from "react";

function App() {
  return (
    <Routes>
      <Route path="/" element={<MainLayout />} />
      <Route path="/login" element={<Login />} />
    </Routes>
  );
}

export default App;
