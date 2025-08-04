import React from "react";
import { SiDailydotdev } from "react-icons/si";
import { FaDotCircle } from "react-icons/fa";

const award = [
  {
    title: "Juara 2 Lomba Web Design",
    sub: "EYTHO 2024"
  },
  {
    title: "Seminar Literasi Digital",
    sub: "Kominfo"
  },
  {
    title: "Workshop Bisnis Digital",
    sub: "IDB Bali"
  },
  {
    title: "Juara 3 LCC IT",
    sub: "Sitefest 4.0"
  },
];

function MainBody() {
  return (
    <div className="main-body-content">
      <div className="content flex flex-wrap gap-6">
        <div className="about-me-card shadow-lg p-4 w-120 rounded-xl bg-[#FAF1E6]">
          <h2 className="text-[24px] font-semibold">About Me</h2>
          <p className="body-desc pb-2">
            Saya adalah seorang siswa lulusan SMKN 1 Denpasar dengan Jurusan
            Rekayasa Perangkat Lunak. Saya memiliki ketertarikan mendalam pada
            dunia digital, terutama pada pemrograman dan rasa penasaran, yang
            mendorong saya untuk terus mengeksplorasi dunia digital. Di samping
            itu, saya adalah siswa aktif dalam mengikuti berbagai kegiatan untuk
            meningkatkan skills, seperti perlombaan dan kegiatan organisasi.
          </p>
        </div>
        <div className="award p-4 bg-[#FAF1E6] w-62 rounded-xl shadow-lg">
          <h2 className="text-[18px] font-semibold pb-4">
            Awards & Certification
          </h2>
          <div className="award-caraousel-wrapper">
            <div className="award-track">
              {[...award, ...award].map((item, index) => (
                <div className="award-child-1 flex gap-2">
                  <FaDotCircle className="w-2 pt-1" />
                  <div className="text-award flex flex-col">
                    <p className="text-[14px] flex items-center gap-2">
                      {item.title}
                    </p>
                    <span className="text-[12px]">{item.sub}</span>
                  </div>
                </div>
              ))}
            </div>
          </div>
        </div>
        <div className="about-content grid grid-cols-2 gap-4">
          <div className="about-child p-4 rounded-lg">
            <div className="heading-about-child flex items-center gap-2">
              <SiDailydotdev className="text-[24px]" />
              <h3 className="font-semibold">FrontEnd Developer</h3>
            </div>
            <p className="text-justify">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa
              doloribus nostrum dolorum autem, quo iste ea optio! Molestias quod
              doloremque aut consectetur laboriosam labore reprehenderit
              facilis, quo expedita magni sapiente, animi eligendi molestiae,
              quidem est adipisci ab dignissimos ad. Voluptatem error possimus
              temporibus accusantium? Aspernatur tenetur placeat odio quidem
              assumenda.
            </p>
          </div>
          <div className="about-child2 p-4 rounded-lg">
            <div className="heading-about-child flex items-center gap-2">
              <SiDailydotdev className="text-[24px]" />
              <h3 className="font-semibold">IoT Developer</h3>
            </div>
            <p className="text-justify">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa
              doloribus nostrum dolorum autem, quo iste ea optio! Molestias quod
              doloremque aut consectetur laboriosam labore reprehenderit
              facilis, quo expedita magni sapiente, animi eligendi molestiae,
              quidem est adipisci ab dignissimos ad. Voluptatem error possimus
              temporibus accusantium? Aspernatur tenetur placeat odio quidem
              assumenda.
            </p>
          </div>
        </div>
      </div>
    </div>
  );
}

export default MainBody;
