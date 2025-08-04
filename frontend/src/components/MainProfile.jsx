import React from "react";
import fotoProfile from "../assets/Profile.jpeg";
import {
  FaFacebook,
  FaInstagram,
  FaGithub,
  FaLinkedin,
  FaPhoneSquareAlt
} from "react-icons/fa";
import { HiOutlineMailOpen } from "react-icons/hi";
import { FaLocationDot } from "react-icons/fa6";

function MainProfile() {
  return (
    <div className="main-profile-content p-10 shadow-2xl rounded-2xl h-fit">
      <div className="profile flex flex-col items-center justify-center gap-6">
        <img
          src={fotoProfile}
          alt="Foto Profile"
          className="rounded-lg w-full"
        />
        <div className="profile-text flex flex-col items-center">
          <h2 className="heading-profile text-[28px] font-semibold uppercase">
            Awi Pratama
          </h2>
          <h5 className="sub-heading-profile ">FreshGraduate</h5>
        </div>
        <div className="social-media flex gap-6 pb-2">
          <a
            href="#"
            className="facebook text-[20px] p-4 bg-white rounded-lg shadow-md hover:-translate-y-1 transition-all duration-300"
          >
            <FaFacebook />
          </a>
          <a
            href="#"
            className="linkedin text-[20px] p-4 bg-white rounded-lg shadow-md hover:-translate-y-1 transition-all duration-300"
          >
            <FaLinkedin />
          </a>
          <a
            href="#"
            className="instagram text-[20px] p-4 bg-white rounded-lg shadow-md hover:-translate-y-1 transition-all duration-300"
          >
            <FaInstagram />
          </a>
          <a
            href="#"
            className="github text-[20px] p-4 bg-white rounded-lg shadow-md hover:-translate-y-1 transition-all duration-300"
          >
            <FaGithub />
          </a>
        </div>
        <div className="info-section flex flex-col p-6 gap-6 rounded-lg">
          <div className="items phone flex items-center gap-2 text-white">
            <FaPhoneSquareAlt className="text-[24px]" />
            <div className="phone-child text-[14px]">
              <a href="#" className="hover:underline">
                +62 812-3714-2927
              </a>
            </div>
          </div>
          <div className="items email flex items-center gap-2 text-white">
            <HiOutlineMailOpen className="text-[24px]" />
            <div className="email-child text-[14px]">
              <a href="#" className="hover:underline">
                awipratama05122006@gmail.com
              </a>
            </div>
          </div>
          <div className="items location flex items-center gap-2 text-white">
            <FaLocationDot className="text-[24px]" />
            <div className="location-child text-[14px]">
              <a href="#" className="hover:underline">
                Jln. Ngurah Beng, Bebengan, Desa Adat Tangeb
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
}

export default MainProfile;
