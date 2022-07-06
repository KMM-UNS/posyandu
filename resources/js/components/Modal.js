import React from 'react';

export default function Modal({submit, gender, BabyIcon, timeTable, InjectIcon, CalendarIcon}) {
  return (
    <div
        className="modal fade"
        id="exampleModal"
        tabIndex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
    >
        <div className="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div className="modal-content">
                <div className="modal-header">
                    <h5 className="modal-title text-center">
                        Jadwal Imunisasi
                    </h5>
                    <button
                        type="button"
                        className="close"
                        data-dismiss="modal"
                        aria-label="Close"
                        onClick={() => window.location.reload()}
                    >
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div className="modal-body">
                    {submit && gender ? (
                        <div>
                            <img
                                src={BabyIcon}
                                alt="baby-icon"
                                width={25}
                            />{" "}
                            <span className="align-middle">
                                {gender === "lakilaki"
                                    ? "Laki-Laki"
                                    : gender === "perempuan"
                                    ? "Perempuan"
                                    : ""}
                            </span>
                            <div className="mb-5">
                                {timeTable.map((item, index) => (
                                            <div key={index} className="mt-5">
                                                <p>{item.usia}</p>
                                                {item.immunization.map(
                                                    (i, index) => (
                                                        <div key={index}>
                                                            <div
                                                                className="rounded mt-2"
                                                                style={{
                                                                    backgroundColor:
                                                                        "#f0f5ff",
                                                                    padding:
                                                                        "20px",
                                                                }}
                                                            >
                                                                <img src={
                                                                            InjectIcon
                                                                        }
                                                                        alt="calendar"
                                                                        width={20} />
                                                                <span className="align-middle">
                                                                    {i.name}
                                                                </span>
                                                                <div>
                                                                    <img
                                                                        src={
                                                                            CalendarIcon
                                                                        }
                                                                        alt="calendar"
                                                                        width={20}
                                                                    />{" "}
                                                                    <span className="align-middle">
                                                                        Rekomendasi
                                                                        Tanggal : {" "}
                                                                        <span className="font-weight-light">
                                                                            {
                                                                                item.tanggal
                                                                            }
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    )
                                                )}
                                            </div>
                                        ))
                                    }
                            </div>
                        </div>
                    ) : (
                        <p>Masukkan Jenis Kelamin</p>
                    )}

                </div>
            </div>
        </div>
    </div>
  )
}
