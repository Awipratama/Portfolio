import Navigation from "../components/Navigation";
import MainBody from "../components/MainBody";
import MainProfile from "../components/MainProfile";

import "../css/App.css";

function MainLayout() {
  return (
    <>
      <Navigation />
      <div className="container-main flex px-30 pt-32 pb-16 gap-8">
        <MainProfile />
        <MainBody />
      </div>
    </>
  );
}

export default MainLayout;
