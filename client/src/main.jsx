import * as React from "react";
import * as ReactDOM from "react-dom/client";
import {
  createBrowserRouter,
  RouterProvider,
} from "react-router-dom";


// Import main App
import App from "./App";

// Import CSS : Tailwind File
import "./index.scss";

// Import page components
import Dev from "./components/Dev";

const router = createBrowserRouter([
  // Client-Side Routes
  {
    path: "/",
    element: 
    <App />,
  },

  {
    path: "/dev",
    element: <Dev />, // dev test page
  },

]);


ReactDOM.createRoot(document.getElementById("root")).render(
  <React.StrictMode>
    <RouterProvider router={router} />
  </React.StrictMode>
);
