import React, { useState } from "react";
import ReactDOM from "react-dom";

import DatePicker from "react-date-picker";

import BabyIcon from "../assets/baby.svg";
import InjectIcon from "../assets/inject.svg";
import CalendarIcon from "../assets/calendar.svg";
import Modal from "./Modal";

function Example() {
    const [date, setDate] = useState(new Date());
    const [gender, setGender] = useState();
    const [submit, setSubmit] = useState();
    const month = [
        "Januari",
        "Februari",
        "Maret",
        "April",
        "Mei",
        "Juni",
        "Juli",
        "Agustus",
        "September",
        "Oktober",
        "November",
        "Desember",
    ];

    const clickHandler = (e) => {
        setSubmit(date);
        e.preventDefault();
    };

    const dateTime = new Date(date.getTime());

    const timeTable = [
        {
            usia: "Saat Lahir",
            tanggal: `${dateTime.getDate()} ${
                month[dateTime.getMonth()]
            } ${dateTime.getFullYear()}`,
            immunization: [
                {
                    name: "Hepatitis B",
                },
            ],
        },
        {
            usia: "1 Bulan",
            tanggal: `${new Date(date.getTime() + 2592000000).getDate()} ${
                month[new Date(date.getTime() + 2592000000).getMonth()]
            } ${new Date(date.getTime() + 2592000000).getFullYear()}`,
            immunization: [
                {
                    name: "BCG",
                },
                {
                    name: "POLIO-1",
                },
            ],
        },
        {
            usia: "2 Bulan",
            tanggal: `${new Date(
                date.getTime() + 2592000000 * 2
            ).getDate()} ${
                month[new Date(date.getTime() + 2592000000 * 2).getMonth()]
            } ${new Date(date.getTime() + 2592000000 * 2).getFullYear()} `,
            immunization: [
                {
                    name: "DPT-1",
                },
                {
                    name: "Hepatitis B 1",
                },
                {
                    name: "HIB 1",
                },
                {
                    name: "Polio-2",
                },
            ],
        },
        {
            usia: "3 Bulan",
            tanggal: `${new Date(
                date.getTime() + 2592000000 * 3
            ).getDate()} ${
                month[new Date(date.getTime() + 2592000000 * 3).getMonth()]
            } ${new Date(date.getTime() + 2592000000 * 3).getFullYear()} `,
            immunization: [
                {
                    name: "DPT 2",
                },
                {
                    name: "Hepatitis B 2",
                },
                {
                    name: "Hib 2",
                },
                {
                    name: "Polio-3",
                },
            ],
        },
        {
            usia: "4 Bulan",
            tanggal: `${new Date(
                date.getTime() + 2592000000 * 4
            ).getDate()} ${
                month[
                    new Date(
                        date.getTime() + 2592000000 * 4
                    ).getMonth()
                ]
            } ${new Date(
                date.getTime() + 2592000000 * 4
            ).getFullYear()} `,
            immunization: [
                {
                    name: "DPT 3",
                },
                {
                    name: "Hepatitis B 3 ",
                },
                {
                    name: "Hib 3",
                },
                {
                    name: "Polio-4",
                },
                {
                    name: "IPV",
                },
            ],
        },
        {
            usia: "9 Bulan",
            tanggal: `${new Date(
                date.getTime() + 2592000000 * 4 + 13824000000
            ).getDate()} ${
                month[
                    new Date(
                        date.getTime() +
                            2592000000 * 4 +
                            13824000000
                    ).getMonth()
                ]
            } ${new Date(
                date.getTime() + 2592000000 * 4 + 13824000000
            ).getFullYear()} `,
            immunization: [
                {
                    name: "Campak 1",
                },
            ],
        },
        {
            usia: "12 Bulan",
            tanggal: `${new Date(
                date.getTime() + 2592000000 * 4 + 13824000000 + 7776000000
            ).getDate()} ${
                month[
                    new Date(
                        date.getTime() +
                            2592000000 * 4 +
                            13824000000 +
                            7776000000
                    ).getMonth()
                ]
            } ${new Date(
                date.getTime() + 2592000000 * 4 + 13824000000 + 7776000000
            ).getFullYear()} `,
            immunization: [
                {
                    name: "PVC",
                },
            ],
        },
    ];

    return (
        <div className="container">
            <h2 className="text-center mt-5">Jadwal Imunisasi</h2>
            <div className="card shadow-sm mt-3 mb-5 rounded">
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col"></th>
                    </tr>
                </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div className="col-sm">
                                    <select
                                        defaultValue={"default"}
                                        onChange={(e) => {
                                            setGender(e.target.value);
                                        }}
                                        className="w-100"
                                        style={{ height: "29px", width: "100%" }}
                                    >
                                        <option value={"default"} disabled>
                                            Pilih
                                        </option>
                                        <option value="lakilaki">
                                            Laki-Laki
                                        </option>
                                        <option value="perempuan">
                                            Perempuan
                                        </option>
                                    </select>
                                </div>
                            </td>
                            <td>
                                <div className="col-sm" style={{ width: "100%" }}>
                                    <DatePicker
                                        onChange={setDate}
                                        value={date}
                                        clearIcon={null}
                                        format="dd-MM-y"
                                        maxDate={new Date()}

                                    />
                                </div>
                            </td>
                            <td>
                                <div
                                    onClick={clickHandler}
                                    className="bg-primary p-2 text-center"
                                    data-toggle="modal"
                                    data-target="#exampleModal"
                                    style={{ cursor: "pointer" }}
                                    >
                                    Lihat Jadwal Imunisasi
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>

            </div>
            <Modal submit={submit} gender={gender} BabyIcon={BabyIcon} timeTable={timeTable} InjectIcon={InjectIcon} CalendarIcon={CalendarIcon} />
        </div>
    );
}
export default Example;

if (document.getElementById("example")) {
    ReactDOM.render(<Example />, document.getElementById("example"));
}
