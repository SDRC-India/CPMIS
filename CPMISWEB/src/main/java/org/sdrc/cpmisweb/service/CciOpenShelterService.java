package org.sdrc.cpmisweb.service;

import org.sdrc.cpmisweb.model.CciOpenShelterModel;
import org.springframework.stereotype.Service;

@Service
public interface CciOpenShelterService {

	public abstract void save(CciOpenShelterModel cciOpenShelterModel);

	public abstract CciOpenShelterModel findLastSavedData(Integer userId);

}
